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
define( 'DB_NAME', 'commerce' );

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
define( 'AUTH_KEY',         '-?%9e}]Yd&qeO|8dq~ZzCtv0*;ZJ1xj{#f8oOK 9^XOSfrBy)!FI]o1Hc#UrQPd4' );
define( 'SECURE_AUTH_KEY',  'r]Ar_t>R-KmDi>u6v6:s!9&5/Y*rbOa7gM|&TR{*}E[:dm^[aKJF7/4=<Y4#gk&p' );
define( 'LOGGED_IN_KEY',    'XnNvD&KNH$;}:CEeTz/ AG[0)Zgk/AX4d[7!T)G Y[c;;mqjeI?4@pZ/~ERbcD|?' );
define( 'NONCE_KEY',        '@nW[..}m!__^9t-+)_E*/j;5A<A)mJa-H)Q_ZiLph9jcnUI$+/u>_A$Hy1pTS1v8' );
define( 'AUTH_SALT',        'P<>N.ZE~lz@?*_BMgpw8zLOS.>F;;5~5U{+gJ;$I/5[z(-S#oVSP,fSEgU](&zat' );
define( 'SECURE_AUTH_SALT', 'x7xW*nB(2+$0Js`@]J;r{gLQe}j8Cg.Xuq+e-ncpL>_o2T**qmC.Xo5s,|w/exW?' );
define( 'LOGGED_IN_SALT',   '|.?k:f[%,URE(IpnCbzO}ruZ=eh_ :9)&&7:wMahtuf$~yw?b.GvPk{5/+&_qj#l' );
define( 'NONCE_SALT',       't<BO^}?;YNXWZL+ +pgV;5eOd<P]Hyl9DT6y;<Z[Um&j0JhSW[wAy8E!TXj_hEsx' );

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
