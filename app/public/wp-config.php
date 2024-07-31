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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}G?/q0@IEi0bIW:nW`wvixbOp2LyN@H(ar@/lVk_Wx7Ukq/e.5G5h 3$=v_xRh~@' );
define( 'SECURE_AUTH_KEY',   '4C 4TIK1c^pt51&GMf3KP;W|g7WFXp)@a{?b(gf;e]eydGwqo3f|Efva0XR;%Sx9' );
define( 'LOGGED_IN_KEY',     '#y5`qXr6nNF!2y<DrC>T:8kZ>&]pdWv&9SM8?C%ACsMdM><f[lq+QW`Oiu!D/vXi' );
define( 'NONCE_KEY',         '0|-#D/7&+W]|tn~%0n|2YlVogRSKs4c2zoJ-A+|bH8-,<Yj<?n(|nHfCkx,7DZzs' );
define( 'AUTH_SALT',         'H*~,Dd_4+=_%Mp~v};%z3J[L_]w-weYj/%hcHIaT-OX[W@d6}TU^N7@(80AtPhq=' );
define( 'SECURE_AUTH_SALT',  'RRuqMnh(!R~]^!T`RWmir;vx,~GA3OtVY-Ba7JfLFu7L=oFW;uc9Ie@60,UO0UYL' );
define( 'LOGGED_IN_SALT',    'S&jRI3`>y%lWwPnk_B#>tB:D0)e;L{[H4cx}jgrx[q)#h9rWNB:_`efTW!L9E%,l' );
define( 'NONCE_SALT',        'MW+]J2T+V}${NSn;s%8)42j4:drT[>9d6gonqwx`XH]o2Ca*cxobnNFGF c*7C}y' );
define( 'WP_CACHE_KEY_SALT', 'j$q:m3{{K]l_Krm8hj%kgcGJPt&|&m.C[FD9z294l/z1,Ql^?8#kRRv ?9K}=P]X' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
