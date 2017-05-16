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
define('DB_NAME', 'lioubouchkin');

/** MySQL database username */
define('DB_USER', 'lioubouchkin');

/** MySQL database password */
define('DB_PASSWORD', '2611naTNT');

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
define('AUTH_KEY',         'KnXL,wa?m[_~pkh9kQ$DCm7FZ;W]!mQ#Rz-1HT4A3&4%_a9y#DSU`<O^F;ny-TPx');
define('SECURE_AUTH_KEY',  'ARo&G)6i+Z(>W+k>4o>,]1gsX3Nf6c?Pq<*#@.zbF-]BBndYh(-:y)In.M3L6bn}');
define('LOGGED_IN_KEY',    'hpW/y9YEiTjy:QwAEBZRmfVnO>02MHWu3OVHt}JE9F-7LMYn$x}~+(Z9(Y-_|]gy');
define('NONCE_KEY',        '*h;}{fiP}]]Q.(5~lh^VN=ks5MjzaMQERS8%diee|,P]n(S]&Y]Oa|j-W{},[14U');
define('AUTH_SALT',        '?*eyH2$IEQ7U{44VD%y_;M7tQZM-kI#KVNx*0l3Focrl/w*Icv_vaa`[NLL8=,4~');
define('SECURE_AUTH_SALT', 'TGL nHD?fFJdI j(w?T&8&Otid)T b{K@V1*YvaNU1g]Ps&>?kiD~DX^(rcH!t)>');
define('LOGGED_IN_SALT',   'j|yG#SN>9Zx43zGW|0c3kzF!..A62Rx_1/i <K^{5q1w9]V8no&|?gC}!*g#A{e/');
define('NONCE_SALT',       '@oe2~Y@+8@1D@;;Y9wKA|IfH_HzD%=iMJnv@=xP$Ua?Wb^#(Gn]w<_4qVB{I>eQ ');

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
