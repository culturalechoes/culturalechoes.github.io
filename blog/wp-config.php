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
define('DB_NAME', 'db755934209');

/** MySQL database username */
define('DB_USER', 'dbo755934209');

/** MySQL database password */
define('DB_PASSWORD', 'paiCh8ieMi');

/** MySQL hostname */
define('DB_HOST', 'db755934209.db.1and1.com');

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
define('AUTH_KEY',         ';olZnY:4%A7 xWf2@pyp+QQiS,]?mCD@-bilLh QaT5*(~#wMkN3gl{/q3pJ*]<4');
define('SECURE_AUTH_KEY',  'w{eRmvO%!eL_us+[ynV|p,E;P#@X]c` %e4L#)^+~+A`Nx%S2L[S/ctlV(yUI:,w');
define('LOGGED_IN_KEY',    'QH3d9Vds#k-^TD0f b!`o,dCG.o>_!08fgvNqpew<Uh_oEO(Q[ -b(9gb8(=DQ_{');
define('NONCE_KEY',        'sxI#Hx$aWujU00`N@aTJ=;d28>:`PwS}66-Sqkrq:Jc:qug|SIEvT`,=m26~g`r@');
define('AUTH_SALT',        '[s$wI`d20v?,(z6^K*=]2h13L --kHfag`XE|IL0rIU1i?Prt^}A=%(RMi+62Ybo');
define('SECURE_AUTH_SALT', '-l&4;Xu+ck/CWUZRb0V4;T]EP%of8hrF8*=k^?<)s%l?_d-]t;T4?@iA3i9JjX*N');
define('LOGGED_IN_SALT',   'AW!3EW<H.?^nBs%+/GJ9<JpV@-:^eJLn+HKBxhP]M;{BZFIbelD0Js D4hL}jkUN');
define('NONCE_SALT',       'sNIj$H5(i+AP^Ho/Qw2lW]B`%2n0/2N@Xm)t4]]A:9=%%z }lds+g#Ei@3M5l6t&');

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
