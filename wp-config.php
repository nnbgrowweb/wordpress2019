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
define('DB_NAME', 'wordpress2019');

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
define('AUTH_KEY',         '{)ifa.-tnlGUn6_c.7*DO`-PD;A|*|/{m%hwXbK|Fh>3vj`.N/vl~{U<^k%|+V.N');
define('SECURE_AUTH_KEY',  '2CF30uWh5S1HipqS)G*l#{2ExVE3W/kWiIHeHzxI|2_~0CWoK~d{goT_P!M:m$qz');
define('LOGGED_IN_KEY',    'fGMYO:-u:,OEfwz,l`?kwr_!>h #H$l33`?1iZ^V2+Y<`6NAcWK.4<.lfkP2G97Z');
define('NONCE_KEY',        '1f5RU2+ZJk6gJr:5GvB x`A.^BTg*%3$ERZdo2o((c,lYxPb*eR5[&Ksr@co+jp^');
define('AUTH_SALT',        '9 F:V}fz%@` @P>(]!W3iyCBAgTNvdrkzW_e%Q{Zm6wiM5i)CruF;;0Tsgix{PUS');
define('SECURE_AUTH_SALT', 'mb3uzTqB,Ga2]=CF<SpU8L]$LD9).1iy<=tU)XT)%(?^)bQ~g%J2T7p}|kNKVb5X');
define('LOGGED_IN_SALT',   'Zyw(&@bW4i-ptRt7EGOY&^%A6}&T#(!RHl}sFvuq^fr HV<m|(o-Mx<kiMK)LZX1');
define('NONCE_SALT',       '7_.|PVf:S3VlNh8(K{-9])mGigjmZJI1{*%l,v}5~m)%AQG~!SZtt>nRg4j^xaAS');

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
