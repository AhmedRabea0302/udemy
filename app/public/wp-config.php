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
define( 'WP_DEBUG', true );
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'YcZUuYHA4qH86TL0AewfcYg7Rgo08B6sJphvYRXGgpx9fPRkl40TfqKM9vPm2zTfT9IP6RvBz+0yMZo9/tWlgQ==');
define('SECURE_AUTH_KEY',  '8RVGiyeuSf9Upla0xgHf5uAaQQVqshZYGXqyMBDBvIeyS2szJD1ZF/47UH8Fdf05hprrhYAPywLZ8hO7ExaXpA==');
define('LOGGED_IN_KEY',    '8XA2QYx+qLn/XMsF3A7F3mjOATAgfXkprbOR9mgHOhIMXz8bds4zfpTdXDjTbEUOWB0XxC3+sgkUNQNvI5szdQ==');
define('NONCE_KEY',        'jsUcwZNN0Myi/pGH+5bt8bdQrpxMTBivguTrMIxsaFBqcyfG5ePxoJIK50rd97k6zXT759XInI9Y8GWvw6txBA==');
define('AUTH_SALT',        'YNrekbIfbz7hZaZ0hBttVxf0HHAb75FcmskTDZmk2nqrtt0RACckztFMSijp+xs7eN1CfcLy9sdv9gmmRvBtQA==');
define('SECURE_AUTH_SALT', '70CtAWyFSLXSOiHd66RYsBNdXsDDxJPNe2hhVYvQZCH4eaMvlaL2/ieztbsifWMCj7UFr7F8p3SMVCMkhW4l0A==');
define('LOGGED_IN_SALT',   '2wtF7+lT3G/42Efbs862L6Wm/Ilq7dpNIqIpy9EsHpqdS8bCBSmtz6Gs8WgEUr9MCXArbWwM4ZPqLSczErLRTA==');
define('NONCE_SALT',       'PaURjIDNyO+DFEp+giF24leCES2p+hj3Tmflhhh44yfJI6pfKchrbuQ0ffABTHC9DDUYpL3UTFBgKH3lTeJnbA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
