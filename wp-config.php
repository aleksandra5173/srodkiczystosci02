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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'srodkiczystosci01_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5FF]C}Q^X+=YB;evYd;O,y{853FsbGj]k{Y;VmET`=n-%M/u|0@i@m0!#$e7dnLz' );
define( 'SECURE_AUTH_KEY',  '}u10ecTmMP=o8*/P9Z/1Ad)Niwjvyeb7-cFKsOIUdY!y?EA`:5j77],/#4?/L?Vd' );
define( 'LOGGED_IN_KEY',    'A4~_`xXLg%VKrD>J]JN[t>: LI3%r/gwKkCnu{}2%M6!H$N:(Klp.2Y,w>#>r,df' );
define( 'NONCE_KEY',        'd(3SK5oIA/*qgNYL{L^BO^$y0`CEbd8}ZwNvfLw9J#MEqzqA-MYkgIHg2-YX(Irx' );
define( 'AUTH_SALT',        '.GvYX[AS8CK[#?sm|Hs+B9[_{p)#BwCzx>89}9k&oxEz.CQs5.wtqdhS`Ow*vPiD' );
define( 'SECURE_AUTH_SALT', '+rr;>XK$3lk,&%V}f]om2dGCY#efP:>ca3!O u;R<^7&QT(S@K|;ve&k`?mood`<' );
define( 'LOGGED_IN_SALT',   'BS;UI#6d[$*D|:]{.~>TtUlo4MsAsJ2H`%3*SI9PyVk|o06}EOO6. w[Hhjs~1q%' );
define( 'NONCE_SALT',       'b3MQQf6?h&t8(RIwa}jz2Wi:QP0maHohHtrd?93f^u5MfSrM/{@b[H85Nl`BIVW=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp01_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
