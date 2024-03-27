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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zt0b5_856v467s' );

/** Database username */
define( 'DB_USER', 'zt0b5_b35s8r37' );

/** Database password */
define( 'DB_PASSWORD', '74.88W6hrx[' );

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
define( 'AUTH_KEY',         'uPnx)xp!D2;mZB@]dc(gO._sB=i{Io~?j3r3tPYyi= MLtd,/8?:.:k&[4gm#pRp' );
define( 'SECURE_AUTH_KEY',  'hnK<7t`uOugtfgx*}V1x{}xj{OsEi(.OFPffn>A<S&n:b[omSZsOUDG/x=+4(Yk?' );
define( 'LOGGED_IN_KEY',    'tv<WX,l;T# C_>=FjB@$)<XdYn7QnSi% UNKta$v]%OBlf{E2zc~k:D!<%iQMTe7' );
define( 'NONCE_KEY',        't)ldvS{WGJ1Y@^dco#G0*ZzE>0g}dv?k68Q0Iv_$&NzYvK;y^M>W~Kx})hb&DO|n' );
define( 'AUTH_SALT',        '5}.qU`ce-EaX mMP=*-gbxOGU`^h]2c/*5KcM.bjKp$HjJ|P3(bar95uc~1HY(m2' );
define( 'SECURE_AUTH_SALT', '7B/m][ ZoU<|G<}^QS@]HxLmp9Gu~/Vsa}},-C]C_H*XLNa|Gw7pU;Y%)H8m~G1d' );
define( 'LOGGED_IN_SALT',   '~qKx#JR6(:#uMBN_;D6198Fa@NU-||W3zgiW0$X((MkW}<I@<K?.Cj1R[1gH+Tao' );
define( 'NONCE_SALT',       'Dno!aFcrrwfYYFe9sVRiCCcW9cVeCpCiN5`:r-e|edk719MkS*&~H)sBh4z<q}+<' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
