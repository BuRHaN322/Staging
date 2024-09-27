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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         '^s; hxQR1Eh%>k;<@$s/(GC4q~B/b&|p2M?ck,i)Qb&^K1%-H.B(U`L5=l]nHO<<' );
define( 'SECURE_AUTH_KEY',  '5u$-IbI8Z0Fj(DeA]E!:6Q@u!3XfpcUDJ6F-fz.q$+1AjJ5`01`%r:GFP1I1|FIf' );
define( 'LOGGED_IN_KEY',    '9xT.=t+(+vKJ1Y}&n8k#2u$tZdv>R~rc0u`~dOY|w^p>e]C5]vp=g)-`tp99n,i5' );
define( 'NONCE_KEY',        'KQ,UDTg_[DnK0OG^FwE}f|Q>@_2j_83(2x`2g0U;FEe=sQ8c$X-;U})ds*XN!_!o' );
define( 'AUTH_SALT',        '3wRNV~b(r , _i`(iSkEJ3]?Tj|R?i3I5c]BDUCo>ga<a}f?yQ1X,oG=t=$pxSx6' );
define( 'SECURE_AUTH_SALT', 'Vipz_-fAILV@j)v)eNK+tujK|+<S=X*`tMyZNDz!+0Sa#3//$O[J7E!N~OaBovRU' );
define( 'LOGGED_IN_SALT',   'SxU6Q0h2`T(1gyc=]s}YU9s&hR%3{G5  c8oPHnDA|EZkSgY@`|vje9^>#p1$`FY' );
define( 'NONCE_SALT',       'h}5Kx2zyORoD/8nzi|).].D+O|5;7aCJfM(d`i,Imtb$P?Rcc[_c^NBbH6.DCSOH' );

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
