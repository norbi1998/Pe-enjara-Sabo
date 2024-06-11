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
define( 'DB_NAME', 'sabo8' );

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
define( 'AUTH_KEY',         ' bRN p#aFHBIEXTsH)?=&uv2`$J.?0r8]SJ*-6=%fcg=%4HfS{qW4},]lp=NRv9K' );
define( 'SECURE_AUTH_KEY',  'mu}.l;|J6(C6(KVx4<S3K)AsJ|gR(TfMEr:d1DNqP|laG<WkT1r.32w6E2,5b&+I' );
define( 'LOGGED_IN_KEY',    'sNiiOkRI1>0io:HHt-6m>-rG@(}m:yrE@pjp.Iw9s}fbKyh!U $^=?3D{M&%Ofb[' );
define( 'NONCE_KEY',        't~8&.r$6M-a/o@w@6q`lRJNm?@@ _WL*M<&$v9 v|U$$?vdfphF>*5&?!uhFk,Xa' );
define( 'AUTH_SALT',        '$?W{[^UvD=bupC42WLQN.CH7Q~?.O.f#5*`R()Ox8$f=AHy4x_}%%vh=>#y.ry2I' );
define( 'SECURE_AUTH_SALT', 'EV@;J~}sulfxPWyzh|FZk^)lyk-WDb/GBbWo>|??l;~9C9oAx>HF`*RjkpJ(QybV' );
define( 'LOGGED_IN_SALT',   '7A}#1(80xQM&p}mB%Hu^.cywFi,Zl |9HsdEP*gla:RV}); LV@|@]4{={2V#gdW' );
define( 'NONCE_SALT',       'f.xupNjnfQr(fl$MV;PAtFfQpbvh1^x`*,&2|rQUps!L@D/l-Nie`lpdC:fQR,k*' );

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
