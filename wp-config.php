<?php
//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ransavi');

/** MySQL database username */
define('DB_USER', 'ransavi');

/** MySQL database password */
define('DB_PASSWORD', 'iPBxH6PrAJUv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'FODkd9jpkAXEPaa5iiQIlxaNKVPdy2TaTVk3BFV9ofbekeffcbeUDXunO4Kqu5pL');
define('SECURE_AUTH_KEY', 'haXkDAVflFRVvAwgE6ydnZiVDRtjXbjlnzfybLENAMhRd4a348bUfWmGkEjDzZgW');
define('LOGGED_IN_KEY', 'SVvZuUmm8g685N32Pp9TRNIoWt5Ml6hzkh9uXI3k8KV4LYuOvja9hnqXOYXviXlM');
define('NONCE_KEY', 'DLKHm2P6vBUsxVvz9dl4EEo8ldCDC4OfEs7vaDPlFTdSxJX00vdZRTTA6VohzcYQ');
define('AUTH_SALT', 'CMQ6rOP1pXmX66cQdouSbb0UnqI2WXrYRIW7JLgzTVqCTPIT3Q9b9yKaTZwHpkBh');
define('SECURE_AUTH_SALT', '7DXqzU5NK3jp9p7E7ieBgyjcb722jyPwc033YETUaYBMAodxZATmTyJCY4pWkYX0');
define('LOGGED_IN_SALT', 'mENPvhVlqCGjtQpGWzk9biNsjdNIFen2UXGUrsoE6gn8sqb950RH1htvHRkOZsp1');
define('NONCE_SALT', 'utrgnzFcM6S7vIY0xbQW0pouUMtu1NjxLCfZ1LH0AZ7ex8XzYFORBrZBPefdUSA3');

/**#@-*/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

ini_set('pcre.recursion_limit',20000000);
ini_set('pcre.backtrack_limit',10000000);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
