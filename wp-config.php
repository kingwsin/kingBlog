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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'yuer125');

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
define('AUTH_KEY',         'IU0egb+;%;s/j*}-j2ymkQas2mwz`q.zdo,SsNa3*e-s3<^Y~A+-E|R)dE3ubUz+');
define('SECURE_AUTH_KEY',  'Y9.8+(j40Y|WT}`Yv?w%Jf9E_*8_{H4aWP0XTNLf^u~NvZ3{Z4dzsp-JQ,?_vy<h');
define('LOGGED_IN_KEY',    'e~p! ZaMDOM$4aAJgD3j~17|896el>+I6%X?P4QM+n}JGz*#*+Q^ V]P<2JwJKW7');
define('NONCE_KEY',        '1?--ZP/,9ri#}<]Wh=H{LFO?I%Nn>cdtR!X|.gfFxroGNqMn>J|Bb|>pvT/t;P8m');
define('AUTH_SALT',        '=x!}JA,;uw05IFLk;h#%K6gwV=d!FW?GiM+cjI(|APG[lFqHwa-$>G$K/6.@`: ;');
define('SECURE_AUTH_SALT', 'J:l-N[$Sn]qJQ!n:3opj|u{IpE=,RHI p*6=H.60TJcw+bBqZQCFQR^|w)rl<-u5');
define('LOGGED_IN_SALT',   'mS+wVFdv~Q1vY4J023NiGqtN%alUiu*-ec=OMM{osr+X|,NkU2Ny-+qLB2<iShxt');
define('NONCE_SALT',       'xHMH1+,=A[9,HdPgmybwqjGZ[WwtC2},bvCdwaJ[1FwP^cgOW}?+oXgq;J`9}cCw');

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
