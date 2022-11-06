<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //



/** The name of the database for WordPress */
define('DB_NAME', 'godigita_c31meriTengf');

/** MySQL database username */
define('DB_USER', 'godigita_U3ser3n');

/** MySQL database password */
define('DB_PASSWORD', 'F&M57yOB$ogM');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd626c0188b072488524b511dcac0cfc7f622207666f9b53163a68841cbfbd998');
define('SECURE_AUTH_KEY',  '80f98410472e9581b89e3d5c53858238e7767bfda21c082e947d0d3f1957c518');
define('LOGGED_IN_KEY',    '38fdb6b65dbfe5311fcb2f92215d053649f8b63232b17e3750bebeb93b5f2998');
define('NONCE_KEY',        'f0fa687bd41909696fc871181b892890379fbc935cd93300db5c0262571e94f5');
define('AUTH_SALT',        '7624e661560846ba937d6d699def86ef452b55b7b908b737fd7315ef6d5c5e0a');
define('SECURE_AUTH_SALT', 'f01f0328a5f6fe46bc7e369c9cd2d4c07951d2af3026114bbbbf0f2a426b50b4');
define('LOGGED_IN_SALT',   '6e9136d3837a54b4b6ed1eb8eca353c27ea8637941b3b11451f05c1720effba6');
define('NONCE_SALT',       'c83d50ac20b1e0cc0c51759e74b5cae58f53df934a143574d24036adb5147c84');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://www.godigitaleg.com/');
define('WP_HOME', 'http://www.godigitaleg.com');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// define('WP_TEMP_DIR', 'http://www.godigitaleg.com/gdwp/tmp');
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');



//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/?page=apps&name=wordpress&section=how-to-re-enable-the-xml-rpc-pingback-feature

// remove x-pingback HTTP header
add_filter('wp_headers', function($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});
// disable pingbacks
add_filter( 'xmlrpc_methods', function( $methods ) {
        unset( $methods['pingback.ping'] );
        return $methods;
});
add_filter( 'auto_update_translation', '__return_false' );
