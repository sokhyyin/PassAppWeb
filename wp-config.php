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
define('DB_NAME', 'passweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eczy#PIAxnm;0(0wMy>mvpVfD)MWJN<&ibz!P]=4q49<@H8*gtJ&^xc~!kL_Bdl#');
define('SECURE_AUTH_KEY',  '2s 8a2 Z:jN.vM@}kQ4KP&M%!/]^hzk6mI~2:8^ ]=!YJVfir5q@e+r#wmN_PLy^');
define('LOGGED_IN_KEY',    'sLbwJCxTK`El2C8>x^k4,`#}5o+%oixL<zDN:62_PpAS7y.kphM^%XG^8dxi72q]');
define('NONCE_KEY',        '}Jg F6Y.b5bOnbZT8r:lu,K5OUCg5TDMwlEp([zYlXIm+xZuZ(;&/KnO-z[e-ZNP');
define('AUTH_SALT',        '4[$N-[i|Hw(g*k;h<{= _D=3.^d(X3>GXw3#gZ5HXvi_ e$6G]YQyv{Zm!.DTuDW');
define('SECURE_AUTH_SALT', 'maj/}Y;/sy.b>%A#>wSXtXj6e6TFnvt$&b[JCi8Kw7b(i>+_xE*l_]&7=2tm;5o?');
define('LOGGED_IN_SALT',   'n}*-,,JXFSwKvAK1E{sL$Wv@3j0Pbli#4t= )^ l=q[K@kuj<gUK1JNJr+7!QAaM');
define('NONCE_SALT',       'X}@2r;g8E+Bxgq=f#Nr[G}vp5.b?,&u+THQV+H_D2w+s&D6otuGx^0Y<LA$~rEiO');

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
