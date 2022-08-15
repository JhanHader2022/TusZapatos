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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zapatos' );

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
define( 'AUTH_KEY',         '<#{$S~m>cK)WgrAs/D^R8;2gc(!jUH2Yi!$cY+Kj<urZOS?H2JaP!r SxOIg`VP|' );
define( 'SECURE_AUTH_KEY',  '*0Wsu_D6kmYU$q,zturmMAJ0A<Z*URa0Q~y!=2,D<-R$ts167%sM7]44k#s]R#TK' );
define( 'LOGGED_IN_KEY',    'Y[vT08lGmfV}%t1q=fOm<!aCqr%-l|K;4*jpHF}PVQiA8VE5s,PSE0.<F9cDc1{i' );
define( 'NONCE_KEY',        '6S;{t{+Uo>OeNiJ6G_sRar-:?msckyb@mV1l}#7f00ZBj(SE(29P EP2H2(l07*z' );
define( 'AUTH_SALT',        'gI,vbH5g..l7y{*d1UhbYXRX`~)F5<9inOna`0?l5XH!KcjY?h/r-U#d=s2}aJSW' );
define( 'SECURE_AUTH_SALT', 'A+7^FGh&Y}tjs*&CSnDo1V#6P:YpuC!g.fLeIqiA@743js$/^/gaAGJnB,rMRB`2' );
define( 'LOGGED_IN_SALT',   'L,YN4R85TYlB3$kARdJMNXsu4S7wf3^=u`%g22,@h_UYWN0.&u`DDY~@cbz25|VL' );
define( 'NONCE_SALT',       'Y(jBy^Li3^0SXC#C{dWbp=XPC; hCscwJ782-j@Y#cI>iUZk2h|}0Q*O5(uWQGP~' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
