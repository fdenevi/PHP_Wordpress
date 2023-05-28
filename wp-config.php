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
define( 'DB_NAME', 'curso_wordpress' );

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
define( 'AUTH_KEY',         '?GfM0@o^XnbC+{:XfI*b7Tj|kU6s5LyW>aRNo?)@CUtWtO0?V6$/G`~a19K@.!WI' );
define( 'SECURE_AUTH_KEY',  'y[_R[t.EnNCaKkLFgY-70.nfXeIO&76X#_:#0C]bRY~p$a|(Z]_apH~MY4KyrTcb' );
define( 'LOGGED_IN_KEY',    '?M<bvGG+]Or:AB5t<K&dghC`Xeyp<H^Xu}AZp<Htc_@dT(N=?U;0zhmr{1Kw~A~E' );
define( 'NONCE_KEY',        '0*FfT`~oZw5udeFA2Fw;NDE&GO8x (aa$T{qx,0n*)?:3(K<TpP?uy0+VroIE@.O' );
define( 'AUTH_SALT',        'p0bxCKCw!TS~9@-*.aJw18*Je(/9wbZcse] 8L(<<&4{3FMVf(v7m!GyZ4<F6P&L' );
define( 'SECURE_AUTH_SALT', 'h1ev7:;YJ%PHTt#%)BXH0yG,  Z?oI(H5SWFJXM82,##i9?XC]Zd[kcl-y1;uBW-' );
define( 'LOGGED_IN_SALT',   'rVg4%S=`S?L}W7XUlEn1/8NHIJ>bQqQ 8|;f*:W0ACR9vt=irnT)&uK~./TN2y*~' );
define( 'NONCE_SALT',       'WAPA0|jZ b#N5e#C8CbG|mJ9?^Ym8r(1##jZewW:sB|+{2; |2X/&k%Z>,prbBc(' );

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
