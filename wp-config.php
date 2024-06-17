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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blueshop' );

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
define( 'AUTH_KEY',         'OTq<nb)T}%u@h2}JQ1&SN-9os}YE//!~9Y-]a(|i!J#m:Qv*0k(v_Bib#hWO-W22' );
define( 'SECURE_AUTH_KEY',  '1$VNgBc~[FUpS|yFLLzcK$S:^`>W;s|*h+.$CgoFAe:VF{Q{kq:e>a_)}|{|n*?J' );
define( 'LOGGED_IN_KEY',    'i7<r+z3#u-Z<6~YX+|e,$1=v5AgRW5^#x;_<UVv5h~{o.cqa)tN{}Gu$PsaqMjGI' );
define( 'NONCE_KEY',        '4)sN^69)AY@TgtL`yy/F]U?9L$js7)`3_V/bJf1opb#c8}@zQsznrIY{<P>W.C9,' );
define( 'AUTH_SALT',        '-C%WimsH;TLH;JD=%p^D=A@=h+L*C(q)#BPPI+>*/K^qh*98M9Ld(}$9]*zxP{_W' );
define( 'SECURE_AUTH_SALT', '6p_Sz[_fgqELp/L@J&sU6A=lm_xG-C5VOlQ0Ez1yWn/<uLoRQj7k4A5Q;q.oby{[' );
define( 'LOGGED_IN_SALT',   'uq!?L!u5.SZ2nRF|Ce?$jd$b_u#[9(k-1NwC+h/_e`/ih _JCxYw;g5GlVnLT91b' );
define( 'NONCE_SALT',       '-5HDa>y3.^7OS/uYDrABtJ8Q;9~c+@66@n*j;{2u=pxi*OrYt}_p=*BetzB`qHt9' );

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
