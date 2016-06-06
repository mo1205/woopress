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
define('DB_NAME', 'woopress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gw^K+)I.h5[7?PWz!ZJZh! enpn:4Z{rnMmfY!a$lfDt2`r1z@f&GYmrI}pq.xUP');
define('SECURE_AUTH_KEY',  '>pV,G^9WQ`b#V)~w]PfHKmsc9:Ayu#K%fYEBJp]tuts$z1AM0TfxsrI)l(;rlf72');
define('LOGGED_IN_KEY',    'jjI(VR4t~Y>1nI?Yuu%Fuju`Pz#StFA@z=wZT-yGmp(WBN$hN~RRcn08;{(Fg3-9');
define('NONCE_KEY',        ']0|9bC]o*jRLHa%MKG8lWz>P?wN^sKK#F:guj_*H^Qk+1.b4c5R8C&E U%2fz!k4');
define('AUTH_SALT',        '{[?Zh.{HF?8F=y6[_}b@S8D>3NhL~aaN3,x^kyqO~<Z1C6yZ +F8AN?|#RgU@+7W');
define('SECURE_AUTH_SALT', '!^@Q.Jc0t:=.hPaohiH3eA|=^=zm$C5ct!hj9nf)).;su7c^LzIaIi4]]B]PKhu)');
define('LOGGED_IN_SALT',   '%Vpfcak{;_(lL:-8)x}4:k#`P]*LxJ&TGriiCI&lv5rxB2n40mJ}}.]5VdRvwZ],');
define('NONCE_SALT',       'ShFZu/%:7ztHL^S~{}Y9JWL[H-a!chf0e-A2XZ,W(_?/`+~9 NhQB?Io6fSl!bHd');

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
