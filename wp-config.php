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
define('DB_NAME', 'my_js2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '?xB%8u[*vO{uA,]N,FL3>)<24Z~<rYPN5hC{7bXIr$+k{Qfk!*2M.p^H65Bh rw8');
define('SECURE_AUTH_KEY',  'QBe)+pb&od=a.<8H/b*-(MLQh/n%A[+a0_qB7t*`^d;4^PwE!BU.rBngB|h~] .3');
define('LOGGED_IN_KEY',    '{:*/PNyN)CP<zx$+z}E?[ -C.Gd~F6Uss20W-HPv~v[A>zB:{{I,tO5&t* nh$55');
define('NONCE_KEY',        'SjQ&Lve[rT^klcWTVyrw!SbZw6d`;5@ua,gp&+mDoN%?Sl?+RF+Msln)v?toehgL');
define('AUTH_SALT',        '.79xN$XYGD}iBVE ?mCB7gl||=hi@dHB5W,h!>b~^i,aZ+@x2(R2*3d*nm+W0;g&');
define('SECURE_AUTH_SALT', 'a73,-yd,Wi}Y-PXw22{>HfD!MK%;yn_s|#kvF^Z0pS&VDvTC.>1J]sYvFO#J8UQQ');
define('LOGGED_IN_SALT',   'GQ$:#O_E8Ois<D`7LKTDn!Q-c/y$RjHSewT$||%+X@Rv9Rs|uFDiN5U SD.+xAKR');
define('NONCE_SALT',       'd ac3f/WyYsJ{q.-eKlL. 6}fGQsWsJlMq+R^Y5|>n6Ur0 !{$`T{%gH(<#-97oq');

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
