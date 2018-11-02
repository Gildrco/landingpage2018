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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gildr');

/** MySQL database username */
define('DB_USER', 'gildrman');

/** MySQL database password */
define('DB_PASSWORD', 'insivika123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~~ k4eYqcHN3xUUDCUV<J0^XWJUeOf)+wzcq;yP|)x&|K.nxB_Q$Tl:5v`m6fItN');
define('SECURE_AUTH_KEY',  'bVbjQr|EIkK7aBq+cs&4TAL { /Op[:/Bm]?|]B$kzR.nFwM2q[=6%{N>|9sl-b=');
define('LOGGED_IN_KEY',    '9($HGm1B]HSXMCW!fr!K(.6M9p[cH.P.6X{{oWgrVy+W=8m)FA?_XqLSuO;;|+Bq');
define('NONCE_KEY',        '2d,4lEB5Pb`@G |D[>jB-wWF@$K?I+:)]:L/}RN&}^9S/>~:e#ZKKq~.*,h^H(|j');
define('AUTH_SALT',        'G5,=[V#;SSoH^xYc;EG1ZsCQ|;;#W-?M,dyAhE8=KFJbK-70mHv+qhl%AUZ~YK*V');
define('SECURE_AUTH_SALT', '9/MQIo|w0-<0<WE&lJ5W{;iV,->@A[%MU(!q5i1~E$$2TO%D.35yj_/!^<ipzQNY');
define('LOGGED_IN_SALT',   '~U8|,Y9G<Gp+}Oion$D!#SJKhjM Gr;Oz)>HEAf-It<[4cmgB7Mn^|@C_Q3C5E,;');
define('NONCE_SALT',       'Y/!W*.F4%Q(|FsM~[j2<+iYfZ[_$Q_i+;@T?gpRpL%N!0=?e.rd}f2fr+<`<k}YE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
