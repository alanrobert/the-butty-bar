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
define( 'DB_NAME', 'the-butty-bar_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5z*6f**/<5y^ByZ}`O|$et0leu[v/;Vy3]bNHzfIDp^:q7zBQ,osyZ=:DhL]:OOA' );
define( 'SECURE_AUTH_KEY',  'LU8 xz]qb1=:4_A{ARUtU9S9dYhb9n.`B?S#c_qBsDTo&9w3Xk0;J@a2otV ONE`' );
define( 'LOGGED_IN_KEY',    ')1eAz[Bi5Af@HM$q[]W;`ki@>xO#<gH[tB).^t%WDi[kyw#?vhKOAE0dx^2Cj8|l' );
define( 'NONCE_KEY',        '$19WuRvk[uDJ!u;M#V1B9y$(;f:0aDmLYB[%`% i%O>PL7<mVhKgh{J_h/DP+rr8' );
define( 'AUTH_SALT',        ',yCjnW-[?/[k=Vq2obwFrHAey=A8S 9VM@_.B5f`6PT94R%w[7_mRujMT-7s 7K4' );
define( 'SECURE_AUTH_SALT', ':9T^woQFow)t0)s%=)u1FhOfIBERn4S,%G+;;Cr8xVEX^G<TKKb=&@LPfe@C]{+H' );
define( 'LOGGED_IN_SALT',   'tl(7+.4zs3%`xZSsQcXAS@o<%gP W,U~w&tM2U%j/o^?[tyIV+RupFy%*e}.Vwr)' );
define( 'NONCE_SALT',       ']G-(31de,87@ZKH[`-~uz1/0mwC<$i)Y([<|]P~t3ujkbbp]>[g;[[(dtnRM!xCA' );

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
