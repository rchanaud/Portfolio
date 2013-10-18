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
define('DB_NAME', 'wp-data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Z9Us[/{83h*a%f:JL4=A_V*`vq-IwE:0 nrV/eauTQ_DdN3`1!tqQ[2 ivbf_0nM');
define('SECURE_AUTH_KEY',  'G:z1?w(M@@]J {A5Kyk;YC@gF;6<t7<5I+n?C@z<s|(F+}2!Q]DFP8hh2,umH5&q');
define('LOGGED_IN_KEY',    '9mX&_opVH .F4.zTPaM^Rp4JdJZ5&bG[gaA?9qlS ag[xP_|VcCySlitp}39W#gv');
define('NONCE_KEY',        '@%qPh`<>byvSH,O<PHaVCX9l$AX:5/T!/:D.L(u=KMeIw(4GK_OzOj|teO]C!]}p');
define('AUTH_SALT',        'nk1oeh(7hd k0o5V389>0m.MyR~l1<8,JwB6<2}JINkpwZLu#_ih+!=p:`J0dL*=');
define('SECURE_AUTH_SALT', '|l)Jg|;VmGHPzwZ!bZ}YzcG;&DN.1-;~e1m_fY1nbkpPdyG!UyI~ufo!k>vEdrC@');
define('LOGGED_IN_SALT',   'z)sxMCa`Z)-3Tr$b*mHnf.PN,xWBc.gjp6lxbw1}A[OVk.AuA(xMGi(uI:yytxMf');
define('NONCE_SALT',       '%QEjY{hYC[*ir!cl{xH{tfwerctdj_}MSl;q7-d6%MlUK;bW4VOhx/$iKe:+IPi0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
