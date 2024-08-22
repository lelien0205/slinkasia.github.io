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
define( 'DB_NAME', 'slinkasia' );

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
define( 'AUTH_KEY',         '.9zUye,OY&}n=8i1~^TP`O|^&>|3NZn!c{f})wuze1^n#U+2KyRW]9S8%95uN`e%' );
define( 'SECURE_AUTH_KEY',  '3zld.XX`uTP]!dY/l#Tt:hfdRp13AP|b:A?K&3rS20%fX1JzyY-][V0lD:][8El+' );
define( 'LOGGED_IN_KEY',    '&i6Utc,[I:wDDJlA4xUd_cH]J/,qeL2;CK~w[,Q0.D+&?q}* Qo99l:kX;0_2p8/' );
define( 'NONCE_KEY',        't<9`@h%&_^<p;y|^+c5S&g2/>QaoJSJ|k`sm~-uc>f-J#i{#M&et(s:my;XbD~wv' );
define( 'AUTH_SALT',        'Ci0/k#k@)F(&PY8yL]K]kMT=BaR,0SP TyN@ND SC QyD>4M7C#-/5IZOh@$&!SL' );
define( 'SECURE_AUTH_SALT', '*UPjv(NiqAoV)h[TtpKc$(<SoNl.QGIR!XC+MC>v7r4cDi}o[JpE674Y=`tMUy,!' );
define( 'LOGGED_IN_SALT',   'Vv}}vIl@}N?&J!<KEr;#zRE7@pp+UFiU)IIm;xwfR!__vt,{M!7Y$Wfks st-k0-' );
define( 'NONCE_SALT',       '-;28)w,{rId1#:`u~u5Ag696MX!Y}?*/HZNk4+cHw*z,7p-tU^gfL6pp~_sG)LEy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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