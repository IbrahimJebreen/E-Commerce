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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '5BlNTZih7(..Xku+`RaO#SLm_Y0wkg1_gSHflHJz[e%&VC%;,ZjgEr{O%dD70Qfq' );
define( 'SECURE_AUTH_KEY',  '9HPZvyiDNzf_%}>QT[NI~Hk-<|hy9b.Y2AET;:w9#7oPMVRzbT:{GhU5u6yS-*CD' );
define( 'LOGGED_IN_KEY',    'v66fA)oZO)1>IeR`qpikQA?R;~A#^ |J|o_e@$/6*G2[%Ipd`|<;$<l1^.mVB~}h' );
define( 'NONCE_KEY',        'k:<Q r:PC:8b6gpSVSD2ce)h*@bjl_|7jkhJNDFb*R/^@[npAeM,$0+$}>(yu:I1' );
define( 'AUTH_SALT',        '|m*:8-k{y<?(xXY,%dz=uY=JFtHcDz-~*a;6f]>:8$D_9WHQG(>Js/3^05$,j1p%' );
define( 'SECURE_AUTH_SALT', '4k;mQnDAYLj2EE,L*[}-Q!*p_fgwVCIWNz2_,/8J:wj7}P%|]-Eygq#e@mV8]Ywx' );
define( 'LOGGED_IN_SALT',   'Gl|1+u_Y}?sV YbMxCQ<2lm?(IH41e {jIxK]RfI]p]vZx80qC>s0&e79I)[(#KB' );
define( 'NONCE_SALT',       'n9QNdlpxrj>x1N)5:V<:_}ahqP`f>G>zqEouh8<,bts:R4Y2x/2RZ3_[Fl&@P47d' );

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
