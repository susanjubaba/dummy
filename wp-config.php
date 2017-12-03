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
define('DB_NAME', 'wordpress_p1');

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
define('AUTH_KEY',         '<<5rFqeZ6i-f33,R63>,Zj%. %7* awq)736c^D-5hP7amRD3D$DXsb4=6M9*rJ;');
define('SECURE_AUTH_KEY',  'wNC-p?|kC.k^Z{XvVwapUTxJq#[@pBWkf)=lZDOPWb~_42RjF4Gya(LO]3k><Lue');
define('LOGGED_IN_KEY',    '{S,@.gvEw(;]G6$b&a3L}iU>.x3BKyIYV8z 33d&gQ;SeywaX79=VN-}0U>s2ofq');
define('NONCE_KEY',        'b;xjL:DLb{{&bmd)TN*/?+ T|6WX&%OwZz&`jku3~Fnni}:krGR,i;pRSa+|A6 v');
define('AUTH_SALT',        '1$_XG(@N>fx.V93*eY3Vg_};#a.p;V.gt2j10d:y$*ZBg&N}}C7vX,?-}$E[R-gI');
define('SECURE_AUTH_SALT', '=[fC #0~n>GXgX+OhT-[`wj:|@]_Vx/^]MH7{n$>sXGi;o(;$9P.zD9jFPXQpkJn');
define('LOGGED_IN_SALT',   '2mxU85ty^xP$ov&#IA2nDQu6&eW22LOMje^ 2Y^fHduwM#l#4k4Gj sbd)/EIg}Z');
define('NONCE_SALT',       '^.N|z#.g:x C?Luu0Zf<wpQy-9-sNvq*Kz}KRd8b]meit,:<,DgHNZ)luHm8%X3V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sk_';

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
