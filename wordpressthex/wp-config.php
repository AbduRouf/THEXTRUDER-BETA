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
define( 'DB_NAME', 'wordpressthex' );

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
define( 'AUTH_KEY',         'HC<!<qz#a!whA`+q5RCh[xi*2?ckBgZnEx*;}|UR[C$SF*>e1Rj)Jcz*%n9 K#N7' );
define( 'SECURE_AUTH_KEY',  '#]|LvF$)>1k% RnCFMdt.gMJ~5=#aU:54>a:6Ww.P&<v2&!zkG;/=x?lWg][TSx%' );
define( 'LOGGED_IN_KEY',    '28&#>g3/[:<8vwGSC3fi>2V>N3XZPktwj/{dnm )I_9n).sn09[%#2qbnG|m>Pv>' );
define( 'NONCE_KEY',        '7`lF}-:;[d DRY~)`[x)EY 6)b]GXA!Y_r=JJT@sOE^l_3Y?pvD1yOQ,+p]s3b7P' );
define( 'AUTH_SALT',        '`J3R7xXgax (=$4:<l:+^Tte!SfL{g`x{FB/x DCv<GsN~b)8b?MIO(-{jaB7o|#' );
define( 'SECURE_AUTH_SALT', 'U9%OBtoJwVF}#X8pk4o7#^ld9Pz0`cm%,k??v[ q2d)4k0pPP}VH-J4]*VQu`;/B' );
define( 'LOGGED_IN_SALT',   'mxqFA/rF3n.b(@Js&l[nC}uJ4#Ob}5o!tx8OyGS.;HNT83vd71A.rPjZ:1/<>+M4' );
define( 'NONCE_SALT',       '4+`Y9(J+U zuvxU+pUcu{t^z;EPhfyZ1%elCgut2;Vw@n:j0BhTSut6;~X/nD89I' );

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
