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
define('DB_NAME', 'crocrock');

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
define('AUTH_KEY',         ';Ku9&`s7 DBp+bLJXWrblDg/RZx7dzNu;?H8;$uZ:_rl;17?+1g]66*1E#pK^0N2');
define('SECURE_AUTH_KEY',  'xQX7@;gi4f<K}z&bC;7Megc{4SpklW(zGIX/864m(Nxjey:(+[piUBFZOkH[>n}*');
define('LOGGED_IN_KEY',    'SoZE1xmnm^g$UEp5NqV]~Y!e?#[}i>*/#!mXtNx5+#<B6_jb:xXJA^u}4yev~e#p');
define('NONCE_KEY',        'DYE*cZw Y9(vSD;P[QDp~L6YkD8U|Mq+ssWEA;J^3_1I&XZ^6Igo>JB wfBj6aGi');
define('AUTH_SALT',        '9;$;{26k|O[>ljyCh!V]cb}%Qx-0pu##.l QTSw|jyf(W`<L]P777w_Jqg*idc(@');
define('SECURE_AUTH_SALT', 'V8&m6r$8Na6]o^J<KFv=D8/y/GlZRoYV. <aib9{wn+@7BIcQ8cRtB1+j;kg%<rN');
define('LOGGED_IN_SALT',   '%TqzC<]uOeOl;?od(?@2F>AE7;N-5(h^R9a6cR*]<1VlSna!}f/.>@rf(9 (dX!5');
define('NONCE_SALT',       'O ke$Am]si}=Z(p4}`v^c0iT97w{KtTG#xdp .SJJ;=6k(J)/#M~KB1W?gIq|V]J');

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
