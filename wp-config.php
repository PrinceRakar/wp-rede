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
define( 'DB_NAME', 'wp_vintetes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']a*R},GwsF]=)uBrsn+:_n%!xAFeinRc]TuvOfJin)7R@k6|H+ksd[*+S(O3Clfu' );
define( 'SECURE_AUTH_KEY',  '0W {OPxV$}}H DH=mm_~#oVv}j{VAwMU^#/MSkX2YA]-HXDHg[py`._WW]#ssyIJ' );
define( 'LOGGED_IN_KEY',    ',ow}A8AJUCxENU&x-1.=K|&B^,K2QriaGwr6n4(3@l.se~# Z^}j(_8utW=@~9z2' );
define( 'NONCE_KEY',        'Y]JH$QF{MDX7_^Wuc>cWz{&rzwz:pemJ.$zK>aiQ#lh:w}3Cl[oM0;nS!8)rQ={L' );
define( 'AUTH_SALT',        ',T{0PMv3JW)hwV+LAUYP7?JuyWWk:Gg.]a0B>n7qG^+6cN1]V;|6TbJJ7w*4i=p%' );
define( 'SECURE_AUTH_SALT', 'DT%n(BJ-)m_Ov? Wr5B3BEWK8mvd|b2Zx{$-+#,8EHK!j4l%byB60?XQ~hDQ|;6W' );
define( 'LOGGED_IN_SALT',   'AVcD7!ASOyog_ *HB2q~#&ja+*6v4<1:ou_qs}OQL|}EKe5Y4G7?4p@ao!P}#+cn' );
define( 'NONCE_SALT',       '`3hb9nyI,a7oVbi*q^l23LcGCoIAVPRX]:0MGE&w,K,cTID4rV,JX}kLu9]g6vrH' );

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
