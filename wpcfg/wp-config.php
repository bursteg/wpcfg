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
define('DB_NAME', 'wacomblog');

/** MySQL database username */
define('DB_USER', 'b494b8f0d12d6f');

/** MySQL database password */
define('DB_PASSWORD', '22d8c56c');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-azure-east-c.cloudapp.net');

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
define('AUTH_KEY',         '3eu{HbEH+<#g5aJ[siob8 P2S|%[F W9vxZ6x7x4Z^y-kNScmG wb<2]u;cKOo6q');
define('SECURE_AUTH_KEY',  '{V+{&Jp}D38iYD{ZA)}?T2s+Wgvefj`zG|T|*?@lWO?Ny[0}?cIz>K2MlIW<g;]U');
define('LOGGED_IN_KEY',    'p80,|selaVn gfb|i?];Rvo=c.!MA>_wqS+wumiRy?crAMW0E6&]+kVQ-|:mLJ5G');
define('NONCE_KEY',        '^lJIuM(oFks]vjSjg)c|{0qi/VT={$W}bgRi7WPU#616R-H<me3hAUocX8=Vs`#(');
define('AUTH_SALT',        '8N{S[6q|,_7(Ig})}F]Ph-|qBX)7h6Z?1@+LU?yu(yb,j#c>p/qc.0>iM2@[?%yi');
define('SECURE_AUTH_SALT', '&}=3qd:45G)g16D7kEKR7Sfz?SAF!C {>8+TvXtSrv3HqreO#`Ye(dsqd`Y|F9D8');
define('LOGGED_IN_SALT',   '(9 6!qdy:XGeE34fnxD2dwRym2AC:AWOK8jUL/)ZV97bOMp+|wSl#t.0v:v!+N+ ');
define('NONCE_SALT',       '{2PoP7_MJd#@R+<|JpMm%`F;Cl/!nu/^{ld%+Fn%5Oj}ReO3^z|>&:r+fZ:e(q#%');

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
