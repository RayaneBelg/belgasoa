<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Belgasoa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hTEuS,rHh#:TY J`o7HMCt<&hPx%9_3%S2fDe^tNCfk08G:bsJQh,[0gub)e3]&N' );
define( 'SECURE_AUTH_KEY',  '+x%;k4.gla5#EPqysirb#@E8eBoD.Cb? @$$ lr5P%Dkg{(XC%W`#Z>.>iOy ^`L' );
define( 'LOGGED_IN_KEY',    'mFn_|llq?IjjgtXmLdL?o`sS[4i/fpYd?Uxa_cpr?>ZirH2LC5YyC<<|Gv4>M%S?' );
define( 'NONCE_KEY',        '5kb|E!VaIk@4I1q_3F9^2m3krUE!tO$!*hO25$O5wsu5o`|4t=9nc-y#Q/uRgB$y' );
define( 'AUTH_SALT',        'hGk2ibz;vd)+kBoAYYd[Hh!2d_U%!2G6_f|WcAIMlidI.37Q;[aEA[y{G7EJ{Z7p' );
define( 'SECURE_AUTH_SALT', 'x0,LaP,orTf[L*.[<hc/HR%Rg,O&Ee[` }5.@IxW4ZtgibTxGN[5g0t.EdOFJ<X~' );
define( 'LOGGED_IN_SALT',   'A6D(kJczuZ,!SZH2M0dXLCH>!6M{=qg^0zg:v(OeYieu%<vCf/GmK|.1Uge5C*$T' );
define( 'NONCE_SALT',       '*nj9~HNv281Q$Z/`WpE93|~FT:!r:HzAAc^y3pQ`d>fiavfXob8R`]qqTCc.!)E7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
