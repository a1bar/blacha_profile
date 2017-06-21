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
define('DB_NAME', 'klcomp01_word');

/** MySQL database username */
define('DB_USER', 'klcomp01_word');

/** MySQL database password */
define('DB_PASSWORD', 'MhFF4qa');

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
define('AUTH_KEY',         'ZwUWfVv`7*i(B97pn-3<L(2vqBp~@>E`9enFDrZ|k]eEV<VN$1}NV?16-ZY+L8ZE');
define('SECURE_AUTH_KEY',  'M]=sT$_&+pW]j Kjl7K{0)+EG)4S[G9,W--mP[MfOh9l/ivGl|oMAl{HxN:iw[w/');
define('LOGGED_IN_KEY',    's=br?@`5uJZB_f>@>Qo(~_]c.WYm.yqx4[N&<G`1EBCiy75e^8sR-`j46H;1nl+y');
define('NONCE_KEY',        't?Brd{X|h(!v.d#Y|>_hO!dLxl5uz3ktpJc~pOErUN/+tXR!Ia)~/DdH6|8(HPAT');
define('AUTH_SALT',        '&ydGz_s Y2EH2P|Mi6$?0&dayzX&]8jZ-L|5!cm+j!Kzk&8i-lAO*<Gij95r1H$`');
define('SECURE_AUTH_SALT', '{l>MN:CT+lnpaevXM{cl51PCAUlat:4Js1.y;`v*!QoQZ0jR343*j^qG{jK:[Kv2');
define('LOGGED_IN_SALT',   '24-<~<`FhL%4-i)]wRU-Bd6B`/LIBa~MLp$_.z8lxs8o?Hzczj_a2%(E5.Pm+FQ!');
define('NONCE_SALT',       'i>SHh:sv=zG=3>zl9tyejzf?;/-O$O,WeXlO?M,,3P>acY+Ze^201Y[r>2k|smi-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mbp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
