<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iceland');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H}SWur/ |MS^snr>zdkvrJ|m3`=vSfQA}&s%~lGD${|syp|:|Y#+e*D6_eNFfE>M');
define('SECURE_AUTH_KEY',  ':qIX- t-BxFN-Eb^i -:25Z{pVEXOO9VR/qC|rF7 )-vt&-B1ba}4.-yp-2E-BG@');
define('LOGGED_IN_KEY',    'y~ehf9LN}FX.8}o=|^Jl/9Qj}_d4k#8@P:x?}t=%il<|TT(t3RuN)<@SGu;f%[P/');
define('NONCE_KEY',        'phT(mMg<|(pJl~AsOcXW}HjTIf=5=s=AaO+lTF8#zkJ{?pUUgp7-Zq^%d|7Eo%!P');
define('AUTH_SALT',        '<+|aQJf02 ]T%j<]lt}DPR#`X-|bLfi56pKD+k3~<, k`-kvy?t?/ @QV}wnM[Iw');
define('SECURE_AUTH_SALT', '1`Xx 73?bfK+P!FVew`T,p* M)bCOzF+6E JlZb4X|j1%#I<]8&.JphJ3 !<Fmkh');
define('LOGGED_IN_SALT',   'H/>AsTeYvTPK3,mv4@I,4+$NP:W7.D .rr[y]mx@$<w_CWosc^5r=uikTYDH1>+q');
define('NONCE_SALT',       ',d=Hd|>JZ>_A]eS2Ra|3oI7%E~Cnt{[%kHJV3}B.[GZ2wU!L=72Cqc!j2u0.$Z0y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
