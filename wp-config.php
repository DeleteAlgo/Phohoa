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
define('DB_NAME', 'phohoa_db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Y~~KEf9UuT4tV*S8W<.0mpinI&dec/Qdpx#>cSUf]F:>P!)UXD9%*A#KZuV73+/{');
define('SECURE_AUTH_KEY',  'SO:$@z5BL]GhAbAwH|_NA_)IANj2y@Uy2:%W3v_+=(AMBtGw@Fi8O4rFy2snR2*e');
define('LOGGED_IN_KEY',    '?%LN.L3d~~$:Kx=)9<}v@#P*gn.vg8,CrQGk0trHWL/piZ9:LZ>pO:E5h>JF.Y;H');
define('NONCE_KEY',        'qo#L>kF#(uA,h-l[66#P-+(a0<b:k>jPCf;+2mNy|g-}omFQ`dO|QF@2Hun6]#7{');
define('AUTH_SALT',        'x{7Nzm#VY042DB|B;LmMeVa_lcnG+6E|iwu$!8$f=k9>sH&?dPdf&NM>t:h!q0WN');
define('SECURE_AUTH_SALT', 'U,G#XHDKn-.sBA{dV9sx-1QfSLX8_~%RmG0TO]f#l$u+gOv&.M;kQ%fJ+Bx#wF$n');
define('LOGGED_IN_SALT',   '9h[(OwOsA,KZN,+r+nN[*ZP6T[.jNaBHLq,t9n-S/:-qL/_z7ZIpA$.70ojUUWPq');
define('NONCE_SALT',       'n5R.-r6mjX]r&!S_?#i&tUk7~&A>Dr5aP0nLE8:Ek5Lq/k<HXBS&CFmB-|8xTs&t');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '256M'); // Or a higher value if necessary


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
