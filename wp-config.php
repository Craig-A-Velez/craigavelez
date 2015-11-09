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
define('DB_NAME', 'mysite_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Firefly.Serenity.58');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ',=E^u2BUMRvu4W+@f|9rF_Ir|PZBpQ)D[KNFV$Qme9Y|HP_| dJmv)9r|Z84i}pG');
define('SECURE_AUTH_KEY',  '+-PBe+*AupF4K.p1(5k/{.DW&ErF}pb(s]`5:Ud)v!/lf|RvxOnB-8Hz}<BHMMMM');
define('LOGGED_IN_KEY',    '~{7Wj_IE?58-]fUh!FW%riD t*E4ErubkEp|<8!%;1Vy4`o-z}es1vw s~{zUM!|');
define('NONCE_KEY',        'UXvL$ q)+C3-Z-TE_px]1-_aw+`hZTp{jO!z~&Ub?EwOKP{{_7&L%+OKW$togqYp');
define('AUTH_SALT',        'Rj_OC#(-z-4z[9yw +qr:zK;w)!|p{(ue1CUj?,N@Adr6~.PwliJ#I*t@#fu?YVQ');
define('SECURE_AUTH_SALT', 'JpxK1[L->OfU}c0E+5:p!Vh?uA^B$D=-@oC;ct*`[+S9c&t#y~ZeNOe-Sq/gyQdM');
define('LOGGED_IN_SALT',   'iC?r$`f!S)x@M|<d=g.L-:F_#;mS/$s|QsDIhq~yveJYP~|.1:>ifn;<aUJ`%-a[');
define('NONCE_SALT',       '@=-{hC%p1:1Ps#vOwJUYyw+X400H+bfy4LLPnDLE22w>8SF Z%YA;)xkg[QmREzD');

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


