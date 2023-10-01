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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'xdz4M4gwz@h[!]C$_iwOhr3foe^:]?S@`3BYw>1d!&27,r[*6e)*g*tW;p%M.;J$' );
define( 'SECURE_AUTH_KEY',  'd[Y;n1d}`<`wCF-#MxBJvW[fQm 6F{.AqNKN?6&?l#clX-&g^QwMA?b@xrk{GPLv' );
define( 'LOGGED_IN_KEY',    '|@Si5!(W[raU)$X/!Zoy4o!1v@H@Jr~F#3Y5@pB@jh#6Jo&(Xe-!cRuhhI8o_tLs' );
define( 'NONCE_KEY',        '{m_H_HFeRo9]R=+Q[G>R|SOJyN`iSz}NFE03>!jcFg]{~X%>=,Fc8=Za=2/,8sw*' );
define( 'AUTH_SALT',        'X<v`yd^noh]hCt[aJK>]@WEL}<X,}:$ims/9zO7!G!Q(Qp2XSz`:xwLX)O}H|c72' );
define( 'SECURE_AUTH_SALT', 'jtAo){ZJGZYbyIuvh=Q<][v9)oN4(n5w9g(eDdO-)RZRZP@;VcqOgT=L#D#[AV^o' );
define( 'LOGGED_IN_SALT',   'vtF(bn!np9Scw>i |lt,<a][P)ZeSE:Jb6(XDFl>Tb5}*krGJE3F5@.B!4`RhcI.' );
define( 'NONCE_SALT',       'mkx6XL7h1JQvjR[n`;}`bW9VYr}t|~g[K#so@D_1>r0z9A#a,sO;W~{#mkvB:.JJ' );

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
include_once 'new_config.php';
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
