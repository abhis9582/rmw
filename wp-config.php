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
define( 'DB_NAME', 'ritzmediaworld' );

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
define( 'AUTH_KEY',         ']=;>Mi)(ebq3/dKw{.I>>r<,KG{@]fP=-{b2Y^m#Q<#ib%we;UU<K#c8JKt1pAKA' );
define( 'SECURE_AUTH_KEY',  'l@!6RTpi-xPt8aJGyORZRJ>yD_XrTpE]FD58tVvG0r(r=g di-3J0T6qCY_vME!g' );
define( 'LOGGED_IN_KEY',    'trwvgB5lS;!h%F4])$4oZPeP/G3>F[!E@w5*jVnLg q@~Kk{Zw9r,[QrLULU#y@+' );
define( 'NONCE_KEY',        'hxpVef1f-M5|U=6r>[Cn&i2!]d~D54>c9$0}qL|X:TUSGNbZ(k,[JONhr=(_ a/8' );
define( 'AUTH_SALT',        'j|g 34Ktcl0wGT+#4/6PzW5T-<Zg@rS~+PAoCBCzCi)owsIbnZ1ifP{ThaBfyIJD' );
define( 'SECURE_AUTH_SALT', 'DH,7-gK:U*;5~Ak4r_c1 sBKoeHhH]w<%]I{b8^p9d~uYDM1brb/=T{+mF/~X!xd' );
define( 'LOGGED_IN_SALT',   'nO)eg_h[TT{#1g:N/U6n5Bn>2i6/xhw5?Pw{:j6sGiM4RDg}]SA:bEtd+OhgvQoZ' );
define( 'NONCE_SALT',       'H04N>_Ur}{)cH$q,3m.k@P<m,Ns~tSOzdkWL|J7e]O_/Rhr06RnaB`/WF-o}?-{{' );

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
