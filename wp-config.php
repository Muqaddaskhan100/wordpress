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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8.:|>$Dl>OJ,]_(?GFN3]B}-si@_ D,h) >2Gl$/LCxBTyakk?m*Z!ek1TL}PdrC' );
define( 'SECURE_AUTH_KEY',  'nY|BS!ot*wX?=LN|z[^c8Y0 C=s.6<S$W_{+d0`LLN0^I/*`Eu76&)*g3=$|y_X&' );
define( 'LOGGED_IN_KEY',    'Lgz]S~:[>^e7jb$}BA:hYR](]236:g4,4DL;wcQ6QT}^JG.vBi`ZVpwXc+NvI:Ri' );
define( 'NONCE_KEY',        '?L@K5(:#6~?~s4NR/EK<%ASg0ydYA`F1MnbLn$4}>:m?3#tMQtL%V+JFZ0C,%D8)' );
define( 'AUTH_SALT',        '^2IB>L{gk1O-i*)fK2H;S%k|7suGEw!Ysxf`4Ywsa.B{l7Hx{>W7Kr0iYu!AE=#L' );
define( 'SECURE_AUTH_SALT', 'kb<pH^5X6I.}1?DV@Z]92rj>O[i$^ 5etU7~Td(Q#pU Ca<d{(;}pP_WI`M6/p,]' );
define( 'LOGGED_IN_SALT',   '?#:!r_18et*~`NR~W]D2agYcniLV)jV.o{g<;Xgm5KkUxO/!J6v+l^qY`gT;4=u[' );
define( 'NONCE_SALT',       'PS>=7oK429tUl/bgz!XlnI Rrn)@K~`Bw_7]ZrYQX3*P`q?~a*5D>vkiko`3j5>T' );

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
