<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oIpgVoxg5VZzvuWTZ50cVShjlYGRNQeauJo9sQRKSGQ5Ci2yHPRne077Xk/pkQ4snH9X/uTAoaTcna9RKuRXkg==');
define('SECURE_AUTH_KEY',  'NazLwh+0c/Iobw8V69ULv+iXdQ6WXP8wc47FCMYa2XXggW+z9xYmXyeoWk0NObl39Z9oX2Ey6mKNFfokehG2vw==');
define('LOGGED_IN_KEY',    'M6u3gudzBCTomooGA/kHgsOwCrFZsio/28uGcyjCTrCcyrVdlVjOnErO/U49DCeJGpcwV4S3p6Jdm4VRxjgQgQ==');
define('NONCE_KEY',        'qUwNmTCUuXuI9gGuf6kFDWD1aKbiUBp9jxFD0gKWJQmKJWaTkZvytNQ+YildEyLCi5dgWjAmrBrYheqytRnXow==');
define('AUTH_SALT',        'ae7hG1yJ/glEXs9gkyJl9fcXTZc5CoQAdZonEN722gXhQdO7XCuiJfJ0xzxXFozoaWhKaOY71NZ846WZb/kigA==');
define('SECURE_AUTH_SALT', 'T9osrLN0gdxQQqgnKlCHJ814tfUY7kqfGvQjFjbgceknfUjDa6vbsPOjswZxskWpASjScUN4iDPSmmsrEgGM/g==');
define('LOGGED_IN_SALT',   'B8eveyJ2XtK9oCgW3c/XdshKMDymHVbqY5ib7iwfnj9C1wKCMuaWVsJtO0SohevLbgXDyiyLYq4QZiyprNKXhA==');
define('NONCE_SALT',       'OrRh2HEpFswdke1nJTCN9Etp0tGQbGlp/V2uGT11zLxvAUFYvfQYCHyiJxRayEoXax/32JgYWuTfndQ7ctYblQ==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
