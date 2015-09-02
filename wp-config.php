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
define('DB_NAME', 'esc');

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
define('AUTH_KEY',         'v7LjinykwJ56w#GP r=Q/|vv./K}yJ`W-tKT]O[XxPASA/ Cm=[8],GDsL9(@+Y7');
define('SECURE_AUTH_KEY',  'b-V-sXivX-[h7jCg4*98v:X%TfGScxoj^~u{]2/bV=DaRRNt]7[h|W;v$k;8noa|');
define('LOGGED_IN_KEY',    '4h bR{!@}6Ai;c;n+M#hbi,Hjh!)G9}Ja-u,-Zw)v,PlAq-IL|P1r/[i#}(&et+*');
define('NONCE_KEY',        '0/m-,_+qIeRauC#p-nI^;#ofSw-3berYeY}phKyoQxFO[-xmDM ^GXJ_YJ>}&Zi)');
define('AUTH_SALT',        '`8S`g14@ji,$QBpla;d|~-Y>+7-G#k8Jm54c$%/96y-]lA#7G-I+|a!|B*@h.g]Y');
define('SECURE_AUTH_SALT', '|O$+@gS_)Ye-$(#W Um@?2grWz+|Hy#+|auCm9^ pR.<>aSgb{uPf$!E(-U}Iel7');
define('LOGGED_IN_SALT',   ':|@n9~gE:23[@K/ECV2KX-.#G$)fI@2;tm#k6z3]:<L[{)1jNcLKftt]y3jpVg(6');
define('NONCE_SALT',       'G*Q@MR`,@an4+Y8s_>QSKJ;WT?Sp$Jz=-2QTONJ|ot$)5ubPRmh{%ak]ytlxNq0K');

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
