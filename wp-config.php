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

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $db);

/** MySQL database username */
define('DB_USER', $username);

/** MySQL database password */
define('DB_PASSWORD', $password);

/** MySQL hostname */
define('DB_HOST', $server);

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

define('AUTH_KEY',         'MX>1[GB,*<1k&+lkqO>K:nl&}yTfspD lw;E=/iF1^ohIm](Rn4U_oqr42<PAZMV');
define('SECURE_AUTH_KEY',  'NS:11au?0+e8N@pt=s=ly}f+Q/kZ$6~tmdgJQXw J#sPue/*c[sn~ Wv|;MbQ<LU');
define('LOGGED_IN_KEY',    '-pIqFYN/UwQc@r`RNZPU3TB+eC(.3=5-^Q]#?A~s~.=C]{3iWDap0&-i B8X-22L');
define('NONCE_KEY',        '!|B8uD7aeP[DO+l{3y}&2W*|8E-&=CZ:4##,5cpMy4(v|-g)i|L`x=4G~ULHm87I');
define('AUTH_SALT',        '7sO<b/h+>yf%]t(YH08>K|Exn&g|c3Z/~G925}-}h-r4m]S3yLy8Or<NiwqKwH8(');
define('SECURE_AUTH_SALT', 'BJgq:Aq6>tuzC-}#R|>X&)a-a*^[+=@w}+|6?*+tiC{6ia{63u?ZT>?Uuv?HhTi4');
define('LOGGED_IN_SALT',   '+-LdrB8RyE?#-c|:)ag8+R1bC@Hj= T?/h2=t!?LRIc|$E.PQo(b)$ tMJYdq$7R');
define('NONCE_SALT',       '48!QeL+g~]^wadFLsvBEMAL:y:BrZ2v @crxFuO7v2.=Tg74g:A .3bTc_|s^R?)');

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
