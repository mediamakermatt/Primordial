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
define( 'DB_NAME', 'primordial' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
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
define('AUTH_KEY',         '-_dZhp!J.n+tnHo6k.+-_!#pS-Uc0rNYG^^X(J]vD#k:?R7~HryIgj%]<ba-fcHs');
define('SECURE_AUTH_KEY',  'ecN9Cdm1yu)MC/Ya(-Nl-&.5( Nfv}5[a5_-M<C!nr){t/R-^gN3_BoQj>G-jg@W');
define('LOGGED_IN_KEY',    'w[tN^:x$ls:W0R%-^ZRy`xJ[O>9j^-|RIk/ZI^Fq{-*XbY]F%s5-HS1e4vGq,?yK');
define('NONCE_KEY',        'f,aFRf{zX4PJviYGy6j!bK]PCpz&?Y+2n+ud.yP[c9qln^E+`b)7l^V%)FQ.I};n');
define('AUTH_SALT',        'e=.},>Y{),yE.fx=B&>8 c}Oi$BM_Haa|!DIBJL^Lw9c-(l@>AX_V!2cE/dQ+rQS');
define('SECURE_AUTH_SALT', 'Dz70):`_?VVXOFiY~~V;_kBOBW.!$:<G$uIj(wD6d_WR77?*#2F&Th)Lavh9#!>g');
define('LOGGED_IN_SALT',   ',Vg q+w3`cJ#` &U|!hnjLQB vUT|}T^oEUpr`:&[[-n+OK^+&S%kU.<thMAVgxi');
define('NONCE_SALT',       '^{U[rB2lgIIiq_h|gZ,H5,ZJzqVNcpNBAtXg5J41P;>Z8`  Z@R&dIo*?P-d@5MR');

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
