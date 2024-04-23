<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '^A2< +k27aA(2SIzhC70sM?Nsz0D}Ma.pdabGoLvW]#T*wiKmz?+!!h@obWYkKsQ' );
define( 'SECURE_AUTH_KEY',  '</KDlL<muu%{y3.-%/FF,iiNl1${g654V=l`J(N&Eh`^GNPr36C52r<<01Al)fAT' );
define( 'LOGGED_IN_KEY',    'D  8MAc/*JcauMb=jCp6VP489)$2$SuPIF@%I|/{Qgewq6:(M<aN< $GM5(E),5[' );
define( 'NONCE_KEY',        'm+/s(f1$wg$Kz!7x??-aP4uNy,T#S)d|4P52OMy@GgA<PexD#R0W/V<z8&x1T=p)' );
define( 'AUTH_SALT',        '{!Zn8~5U!^Chaj%n2Q#6bE=*zyQg/~K.SKF.t0.6T7!?>u23XaN(o6Ox%vRv]DG3' );
define( 'SECURE_AUTH_SALT', 'g$.OT$^5`#)ogo!K8s&Qq$RY{5zVD?F~^Y1</b-$nLAyF;>jAi(,tMo7CiJj/<RR' );
define( 'LOGGED_IN_SALT',   'l(+8V9 r:k9k+e]KO!8T(];LKI;fG9,QhkiD*slOr61~hLV.5[CD8HnL.U:>IoHj' );
define( 'NONCE_SALT',       'ql:|vo~T:t>)!+4ZEgRS4An#I3);pX6nSlo7<c~U!~J(XLpIbF?&k1>vsr~!SF/d' );

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
