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
define( 'DB_NAME', 'newstar' );

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
define( 'AUTH_KEY',         'NfAbwt]hoo*DDEl4`/3&D7Ap<2NEH,HsP3`X^IvrFg5Sa`6G}3<Y~Jl3ztQ+%.l9' );
define( 'SECURE_AUTH_KEY',  'NCzQ lmZQrJc44->6=f?3M4=*^e$U7j2jm6zplDtgLX/zD)rxL=XZC}N|p>d%+f1' );
define( 'LOGGED_IN_KEY',    'PhHmi+T/},S(t6[Ev2_;%3s;4hUtr([O8K9mtJ{?.lDeBsll QHjP;bK_= (MzIQ' );
define( 'NONCE_KEY',        '.47/@zC5VO_YH!p=7Bx|Nsd}P[m!s~ p>f)l~081_tzWK47}GrPSw;J8tTn:~]o|' );
define( 'AUTH_SALT',        'c<*>!459/Z.}&3w&zaw6f+8`EErgNx94Pog|6u9t;m,q{*y*zc!PGa9*=nH2-l#f' );
define( 'SECURE_AUTH_SALT', ',%z=qsT)KBO|g_C3zJU495@hV`j2^H_`NWeP@_Kka_jKz7:+_jKkI5h$]P=/XFw(' );
define( 'LOGGED_IN_SALT',   'A:P|QRuF,k9^nBNz![036(NygU6sd[AlEmTjeN5r6yvMf8aoD|_4BH|1NhpL@r}-' );
define( 'NONCE_SALT',       '5nyI2WyRBdA*1W %=9OIGay`a4ipO?i%3M&z9j#?V,<)-c* dK4Rdq`&T+Pr9vU6' );

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
