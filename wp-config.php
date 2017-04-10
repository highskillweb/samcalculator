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
define('DB_NAME', 'sql9168387');

/** MySQL database username */
define('DB_USER', 'sql9168387');

/** MySQL database password */
define('DB_PASSWORD', 'SDaBEHxlAv');

/** MySQL hostname */
define('DB_HOST', 'sql9.freemysqlhosting.net');

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
define('AUTH_KEY',         'WXD?7p^V!2x!O,+4/i)-U5##svz#+@g^}G.%F:I(d^u}A>&;<Tv9(YV?y1C44y|q');
define('SECURE_AUTH_KEY',  'rC,Br VKI@@#EUDq?#;g3yOLBMYRuJ6](AC gz{<|$D{oLEsOjZ+8;BANke?zD$l');
define('LOGGED_IN_KEY',    ']sT8:R3OBJ4OlcyKQJ#`Jk$mr1q>4iyxd@Zc]hX/hHE e[%eg8,b06Y,Yi_Q2C42');
define('NONCE_KEY',        '?:0f!mYNo~]8.A+d$;ugbxeLQ1vg K(<p]_YrYL@_c0e4C3+bH^h8ocwP0?[6[&Z');
define('AUTH_SALT',        '&Q723!YH3P2)~-}`ovu7Z- 57O<d:U6eg=o@Jx+S$Cb#^t[)/rJtHq+v-kB~IsM$');
define('SECURE_AUTH_SALT', 'y?NCTO*_0?f5L{q):+ihn/;B8l1aze8_qMZeHF%^)g{8Q{1Xx;v*k$2R8`dJ3d1R');
define('LOGGED_IN_SALT',   '$7m}DzOtJ}<HtT@:%wH.c} tWP$bJ{ZQBvl@E{2qB> 6W`Q)eBNL/j_-)lUydA4l');
define('NONCE_SALT',       'r]?Dothx0=^<2MVo.mg$&wxR+Zfa@)Gyb90#WL<j^Iyy]ko_Nv DuXrZSgEUnh P');

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
