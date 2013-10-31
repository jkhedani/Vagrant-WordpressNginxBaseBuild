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
define('DB_NAME', 'wp_nginx');

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
define('AUTH_KEY',         '_,+mh=dk_n$4{R`-Z`S:fYK]?^V QvQ#c|@P?=UT4E @O8GS|kD2D>s+_i%!&*g|');
define('SECURE_AUTH_KEY',  'b sGKb/%o=W+C2.-=!%&rlmBg$X+<_v1cV9=K&:Q+u6ir3=J @#8?>z{`*-4|a>-');
define('LOGGED_IN_KEY',    '42cH5g7K,=EBE:x-Z-`D,G-0LGd-3bY+xvK`Q|&k+jUF-%bnh3`?>7 44F(k?Ny5');
define('NONCE_KEY',        '2tu@vtlv+^7(f4J|3;I$erz!yd+``l!oHLD[a;#LK20K4zi4yq|BuP9QdxrIc%Ab');
define('AUTH_SALT',        'Vw}DN`W7]fBr=.f{MR%ftIbi^q&3CG,y;Yf8M~,M; oM+K?IUC8NN{fw<?U!H+|f');
define('SECURE_AUTH_SALT', 'Q`/a>G~iOL[)|B)J)/TA&b2dz0.k&/$v^#{d6NS(_4cx<LFLjt2f_MTJc`Q!ADp+');
define('LOGGED_IN_SALT',   'RHLHZF?3LL+3|m|O20]tzYJ>g+Bow)@}Q{}8FFQ&(JaG8vGbl$b8]v|9aI;bR+kA');
define('NONCE_SALT',       '{J<r1^ N}eBw8+EV-4jVo?3,<f!pXKsm]B5W;-vj%*Qf|hGSBNI:iL|Jp&g=6D|.');

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
