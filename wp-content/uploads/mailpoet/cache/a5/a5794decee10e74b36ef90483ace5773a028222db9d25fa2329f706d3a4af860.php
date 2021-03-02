<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/woocommerceContent/completed_order.hbs */
class __TwigTemplate_6870ab1e71b1cc6291d587cd966fabc0ec70706c3d8b9066f29454d83512054f extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"mailpoet_tools\"></div>
<div class=\"mailpoet_woocommerce_content_overlay\">
  <p>";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This content will be autogenerated by WooCommerce");
        echo "</p>
</div>
<div class=\"mailpoet_content mailpoet_woocommerce_content\" data-automation-id=\"woocommerce_content\">
<p style=\"margin:0 0 16px\">";
        // line 6
        echo \MailPoetVendor\twig_escape_filter($this->env, sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("Hi %s,", "woocommerce"), "Elon"), "html", null, true);
        echo "</p>
<p style=\"margin:0 0 16px\">";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We have finished processing your order.", "woocommerce");
        echo "</p>


<h2 style=\"display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left\">
\t";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("[Order #0001]", "woocommerce");
        echo "</h2>

<div style=\"margin-bottom:40px\">
\t<table class=\"m_3180768237544866075td\" cellspacing=\"0\" cellpadding=\"6\" border=\"1\" style=\"border:1px solid #e4e4e4;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"col\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Product", "woocommerce");
        echo "</th>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"col\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Quantity", "woocommerce");
        echo "</th>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"col\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Price", "woocommerce");
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t\t<tr class=\"m_3180768237544866075order_item\">
\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word\">
\t\tMy First Product\t\t</td>
\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif\">
\t\t\t1\t\t</td>
\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif\">
\t\t\t<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">10,00<span class=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span>\t\t</td>
\t</tr>

\t\t</tbody>
\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px\">";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subtotal:", "woocommerce");
        echo "</th>
\t\t\t\t\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px\"><span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">10,00<span class=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span></td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 39
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Shipping:", "woocommerce");
        echo "</th>
\t\t\t\t\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">
<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">4,90<span class=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span>
</td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 45
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Payment method:", "woocommerce");
        echo "</th>
\t\t\t\t\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">Paypal</td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 49
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Total:", "woocommerce");
        echo "</th>
\t\t\t\t\t\t<td class=\"m_3180768237544866075td\" style=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">
<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">14,90<span class=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span> <small class=\"m_3180768237544866075includes_tax\">(includes <span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">0,91<span class=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span> VAT)</small>
</td>
\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t</table>
</div>

<table id=\"m_3180768237544866075addresses\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;vertical-align:top;margin-bottom:40px;padding:0\">
\t<tbody><tr>
\t\t<td valign=\"top\" width=\"50%\" style=\"text-align:left;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;border:0;padding:0\">
\t\t\t<h2 style=\"display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left\">";
        // line 61
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Billing address", "woocommerce");
        echo "</h2>

\t\t\t<address class=\"m_3180768237544866075address\" style=\"padding:12px;border:1px solid #e4e4e4\">Elon Musk<br>42 rue Blue Origin<br>75000 Paris<br>France</address>
\t\t</td>
\t\t\t\t\t<td valign=\"top\" width=\"50%\" style=\"text-align:left;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;padding:0\">
\t\t\t\t<h2 style=\"display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left\">";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Shipping address", "woocommerce");
        echo "</h2>

\t\t\t\t<address class=\"m_3180768237544866075address\" style=\"padding:12px;border:1px solid #e4e4e4\">Elon Musk<br>42 rue Blue Origin<br>75000 Paris<br>France</address>
\t\t\t</td>
\t\t\t</tr>
</tbody></table>
<p style=\"margin:0 0 16px\">";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Thanks for shopping with us.", "woocommerce");
        echo "</p>
</div>
<div class=\"mailpoet_block_highlight\"></div>";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/woocommerceContent/completed_order.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 72,  133 => 66,  125 => 61,  110 => 49,  103 => 45,  94 => 39,  87 => 35,  68 => 19,  64 => 18,  60 => 17,  51 => 11,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/woocommerceContent/completed_order.hbs", "/home/ransavi/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/woocommerceContent/completed_order.hbs");
    }
}
