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
define('DB_NAME', 'AtlasEvolved');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3)mUj~/T=)>8kf3X?mb]<nLI`_L<YGv:]yGMD-.k|[H@`ta+wD2BIj)BAGCUE,@g');
define('SECURE_AUTH_KEY',  'EU ?:G$N37bka{tW4LCdbP9XTYQ@opucx-(kxOM%lq1bLN[XfbB,|#mK),|Q _pw');
define('LOGGED_IN_KEY',    'lngG[m*!/+JqM%rn8`fUaO|!nv0*? =O>7l4Ej-TA(z`0uj@pyDb}R:CSr`4ielv');
define('NONCE_KEY',        'njX6zYK%~MR (<T$P+xV1ERawn0e,Es.0I4QtL1|.7k)DNJjr_V!*2 H6DzvC^=[');
define('AUTH_SALT',        'toKP!!EtHxMjXS40W;:eWCSkh,rx1!VD:mq+&lrF^n; ZGl^NVZpzPm4b:YGYh}5');
define('SECURE_AUTH_SALT', '~hF/A`/utvJj_d(odogYbb, (Ar=1N,:C^F__u_ljS;LkVDV!QWIyfBy+j&w$5ci');
define('LOGGED_IN_SALT',   'OGq~;aqkjLg@_HydIwg*q Ps2&Kzx2<?bx@8W$n82hg8I-HOKJt_N?OPG}~0*(*2');
define('NONCE_SALT',       'zB=e,OmX=8JIEqg8*AFxPP-vZH*rWzQQeM)a0<o?;MT39pn)YpATF@;~/c5d!pwZ');

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
