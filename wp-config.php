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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i7442575_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i7442575_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'O.r9qm9zweQ1R87GN5u89' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'RoO9j9YD3HPyQfXt9piCvMjC0qGjecUjqHC4gNaK7GMio2NtJwdcMsPC2U1LcJwH');
define('SECURE_AUTH_KEY',  '8htRqTJz4j6GJ8wlLKVbK5wrQ8YdNdFYvcMcYfoD3lzohFgQvM5lfJ6hmMUOVEeH');
define('LOGGED_IN_KEY',    's0QUJtMfBxcZvJdS768sNFjRbG32AgLLfHYp7HhFDj2WFQmvRafXtn8ltdk3dgKT');
define('NONCE_KEY',        'PVag1V3rexDF6m7hLKGeek32u1s3jP1IwlTyFry9SJ4YJuxmIQov5EDc3CYa1j3R');
define('AUTH_SALT',        'CEh6EKoDOsckfctEJWVbcBJ5r65bUvZpnWrh9M3xXNTqscmBGLgY4nUblxjlXUR3');
define('SECURE_AUTH_SALT', 'LKmkgwVyGocByRbxRvQiLPVj2tjT14p88ZVwJvgy9hAINet5UapER55pvjCPRPsY');
define('LOGGED_IN_SALT',   'Vs8LFrTGwRkximRkS175Wsd9M1A4aRizcqb0Xfk1eir6ai1avCQMhMqh7HIR8bjw');
define('NONCE_SALT',       'LMozdEOdIhAJVNk3qHgW7lkzs241Wzaq7Jfgqf5qNPXRcHeYMf40DTerDJEh85UJ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', false);


/**#@-*/

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
