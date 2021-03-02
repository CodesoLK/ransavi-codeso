<?php

namespace MailPoet\AdminPages\Pages;

if (!defined('ABSPATH')) exit;


use MailPoet\AdminPages\PageRenderer;
use MailPoet\Config\ServicesChecker;
use MailPoet\Listing\PageLimit;
use MailPoet\Models\Newsletter;
use MailPoet\Models\Subscriber;
use MailPoet\Util\License\Features\Subscribers as SubscribersFeature;
use MailPoet\WooCommerce\Helper as WooCommerceHelper;
use MailPoet\WP\Functions as WPFunctions;

class Segments {
  /** @var PageRenderer */
  private $pageRenderer;

  /** @var PageLimit */
  private $listingPageLimit;

  /** @var SubscribersFeature */
  private $subscribersFeature;

  /** @var ServicesChecker */
  private $servicesChecker;

  /** @var WPFunctions */
  private $wp;

  /** @var WooCommerceHelper */
  private $woocommerceHelper;

  public function __construct(
    PageRenderer $pageRenderer,
    PageLimit $listingPageLimit,
    ServicesChecker $servicesChecker,
    WPFunctions $wp,
    WooCommerceHelper $woocommerceHelper,
    SubscribersFeature $subscribersFeature
  ) {
    $this->pageRenderer = $pageRenderer;
    $this->listingPageLimit = $listingPageLimit;
    $this->subscribersFeature = $subscribersFeature;
    $this->servicesChecker = $servicesChecker;
    $this->wp = $wp;
    $this->woocommerceHelper = $woocommerceHelper;
  }

  public function render() {
    $data = [];
    $data['items_per_page'] = $this->listingPageLimit->getLimitPerPage('segments');

    $data['subscribers_limit'] = $this->subscribersFeature->getSubscribersLimit();
    $data['subscribers_limit_reached'] = $this->subscribersFeature->check();
    $data['has_valid_api_key'] = $this->subscribersFeature->hasValidApiKey();
    $data['subscriber_count'] = Subscriber::getTotalSubscribers();

    $data['mss_key_invalid'] = ($this->servicesChecker->isMailPoetAPIKeyValid() === false);

    $wpRoles = $this->wp->getEditableRoles();
    $data['wordpress_editable_roles_list'] = array_map(function($roleId, $role) {
      return [
        'role_id' => $roleId,
        'role_name' => $role['name'],
      ];
    }, array_keys($wpRoles), $wpRoles);

    $data['newsletters_list'] = Newsletter::select(['id', 'subject', 'sent_at'])
      ->whereNull('deleted_at')
      ->where('type', Newsletter::TYPE_STANDARD)
      ->orderByExpr('ISNULL(sent_at) DESC, sent_at DESC')->findArray();

    $data['product_categories'] = $this->wp->getCategories(['taxonomy' => 'product_cat']);

    usort($data['product_categories'], function ($a, $b) {
      return strcmp($a->catName, $b->catName);
    });

    $data['products'] = $this->getProducts();
    $data['is_woocommerce_active'] = $this->woocommerceHelper->isWooCommerceActive();

    $this->pageRenderer->displayPage('segments.html', $data);
  }

  private function getProducts() {
    $args = ['post_type' => 'product', 'orderby' => 'title', 'order' => 'ASC', 'numberposts' => -1];
    $products = $this->wp->getPosts($args);
    return array_map(function ($product) {
      return [
        'title' => $product->post_title, // phpcs:ignore Squiz.NamingConventions.ValidVariableName.NotCamelCaps
        'ID' => $product->ID,
      ];
    }, $products);
  }
}
