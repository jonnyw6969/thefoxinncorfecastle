<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '5d7d9f74600d1ca815297135d4702b99a0efa64adf6b67bf');

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
define('AUTH_KEY',         'mUIYl^ Q8q4!Hc2VN!9T#|B=b^;@>?2+_:|kh4{YC78%%+A`-d)}Cj![l9Ig@+Ws');
define('SECURE_AUTH_KEY',  '!~S.$bT-W[qit6}Q#1pB(.a?`QIs?-[wAgGE,ElCpZT`3:FG7B7C5*H+PGSZR*tS');
define('LOGGED_IN_KEY',    '|Q$^0<JSlOy`?Em4D8l,&++v]MY3.Bd}N>ccL<_M&VVb2w;-9n.KG|xi~xAS26P-');
define('NONCE_KEY',        'ImEOD!nvtwG^YM%d gF)Ye~17-O|x`q1{BN})<r@sVIm1Q1(}Q5+)5C9!m|--Tmk');
define('AUTH_SALT',        'bjd/&3#7TOyCv82_h/p2rN-t#pPpXUJ-7 ^Xp[=^{IX4rQD_Ow@ _lE-zgr:jJPJ');
define('SECURE_AUTH_SALT', '.98E5Ip~U;qJ/-0e03$%2yQ3^ MN3<LCC|7K|70mxc;g#;4KxL^5RLgOU&#|zz)!');
define('LOGGED_IN_SALT',   'yBKo--R6zp_qQv?` <7kS4hjwp)o*p,CUO|{^4@%H}ELi8&y`zwtxxq~=Wo0>6kA');
define('NONCE_SALT',       '~a4.g^^YJG1>D0oa`Nrw ty&+|+=J1?+jdBsKR6pR%-X)i*EL_e_$l2S6*+Tb0AK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
