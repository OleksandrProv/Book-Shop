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
define( 'DB_NAME', 'myfirstbase' );

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
define( 'AUTH_KEY',         '6dNpgNfa:Ft`WK[crFcif.q%8_]Y8JZCJ7Po|Hjc|^<=/DHpWr/>P(TwzYLmN.n3' );
define( 'SECURE_AUTH_KEY',  'JKH2D$%?1972K6NKF*E)(b-]*Rj`iqysq5s;M}S&uQ84X6f:UQ88M1:]8%D--I=+' );
define( 'LOGGED_IN_KEY',    '0UrbsM3G!V;CIab.`!q|]k#A|fM}l2_x D<&q:yBS/fbapV{<g_lBg`mD@l-&CIS' );
define( 'NONCE_KEY',        'm<kIdbspS.YC!Ua?{wbSJP=2Yu/=YESdw`TVHmEyj&`.g<1lQ<A>J4G,He bPrO:' );
define( 'AUTH_SALT',        'YNVZTNi;{zUe~v3~IIX!`hS$lL)BB~r<NnvqLU TGe(1kr_sPe$Q/o98#k>Q4{<p' );
define( 'SECURE_AUTH_SALT', 'r!aXuovp&AuYh$J_W59{y<@>ZFDnpsg+=g>cAR0}tkT[|Q(fET?gEQDPPLknm}-U' );
define( 'LOGGED_IN_SALT',   ',Qe,Q.x+}u^ZuXh.Ov]R4_!~SwOlP}p?XnNIBnVpNq>Rp#XW4##E^Lb:lXc]Xht7' );
define( 'NONCE_SALT',       'BGV^l_!UOFV<]<k~931S<MzlLT/T<ElXk6b[(:IwnwF)BW<u-{M:uf5Ez/e*@:D9' );

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
