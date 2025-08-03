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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_lms' );

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
define( 'AUTH_KEY',         'I`f%Q}jz6|7tfTKylk`01NZO,_ft5*WyIEFz`Y#i!0y|;~=QKc1wX$9P@Y~cL` [' );
define( 'SECURE_AUTH_KEY',  'pCFOE3~msbrPMZOd)W~k?v{$PDH6Pa]imNs~L{TT)f8Yo?kmyTIoVy%EH0A7|&-g' );
define( 'LOGGED_IN_KEY',    'T`#[,tM9lbpJ+^!38Ex&p_^/P>6?>=os_(3 l(cokUS5T.BtK]A983ewx5y-h*/]' );
define( 'NONCE_KEY',        'm<km%-+tx+/l<^2mA#EV;iEK`1&!Z6mQg!spO^9i0wr24ye_B^-8cT{.)b:(9&pN' );
define( 'AUTH_SALT',        '>3W<!*Z6zjhG[A5!3[v3t5>(8Hx A>?Gw&kKnN`q)v`wP%WdKnXd{9b-=0VKknV%' );
define( 'SECURE_AUTH_SALT', '!m:jg434#|f??#x2o;r22?]RAB]aW__DmdJ{T0T[#i ]NJY%(W!;wvOl6}i$eI~|' );
define( 'LOGGED_IN_SALT',   '&SIPi?VtQ`]f?`nwm^6Qee)(vgH2SKX1ZZ3l&&i2=~Ql-?Cme3dCwr-)5PJ]~5bs' );
define( 'NONCE_SALT',       ']olDMM#-c}@@/yG-45hls?_5IAH5|kG_j4%LI :cYHw}T6I/{e*0,q.?7C_U0#QN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
