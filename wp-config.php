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
define( 'DB_NAME', 'intelisport_db' );

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
define( 'AUTH_KEY',         ',z;/<xaR2VMh?w<|_@[%EP5+3<gIXevP19L7AdOS)8s*+yoeZ4NsV@cm8}GdbB5l' );
define( 'SECURE_AUTH_KEY',  'AotK=%UA+mP5YQ 8q8HMc2&t?Nh<:}PDg-n?b;}|cu4CB]|+02r{F(uX+d`Hk.uf' );
define( 'LOGGED_IN_KEY',    'J);C[i*@IGH[AbpnBXhr>}0U:c9)?q)-ddfqa>YmjPIm8.T4|R$PwixI<ziaB-{s' );
define( 'NONCE_KEY',        'g^+cfPLMQ&6aQJ8h}Gh/S]Qo(Y^6LsG[Lfwxe6|g4qyG| [v)c!h+TKhj@bR K0O' );
define( 'AUTH_SALT',        'q;azkI|Zm58tuT#,Q}&-7b9C}Iek.Ew?Wvf`qf#u+~bv8o?[* @^q@JaBBP~;,J[' );
define( 'SECURE_AUTH_SALT', 'T<uE7WHTU:_>+7Sb[ypyRo0%puW0OwZ`h)m3LJd%ZuLW}0GLANR?{e+8hG<.Yqmi' );
define( 'LOGGED_IN_SALT',   '*>Xm3ZkfS+Cl$V|36nMPt0p4Oo>LN_)]VTabguo_lA_QHlv8#3,t_7Tk 9/mH-lu' );
define( 'NONCE_SALT',       'Lo2U.Wc>qoA_Wd-q{z?rP[%v(.b#c`Iq5=/7$;`2XPuHIPb#qZjUVZ.1Te+G+!%x' );

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
