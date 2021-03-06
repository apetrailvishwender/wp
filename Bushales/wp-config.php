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
define('DB_NAME', 'apetrdo6_wp4');

/** MySQL database username */
define('DB_USER', 'apetrdo6_wp4');

/** MySQL database password */
define('DB_PASSWORD', 'T778S-p!Y7');

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
define('AUTH_KEY',         'ohxslegjhcav1zomcuextczbg1q2ku23iyt4re0ainzuzuyqbpxpg7s6f43hbz2r');
define('SECURE_AUTH_KEY',  'cxe0dalxgbupbcmg2gsysxocbrondzvac4x6twtitq9dbdcxm0mqn3mzqzb0ckpe');
define('LOGGED_IN_KEY',    'vqpjfwvtvu78diw9jbsvq5bcfzzvvbjgdezghwrxt1vw2ld0kkzkjlzeq3rdoz0q');
define('NONCE_KEY',        'hmcuygnfn3enlqxqerg4bvi6f0goof42egclzb21mljvipqnay2k6cweolbmgren');
define('AUTH_SALT',        'xtptnttdquaynzb9f5ctbxhfz4myegs9nzxpwybeg7oibqglcchddx1q6e7n7wrj');
define('SECURE_AUTH_SALT', '3m1kb9jjpzanptrdvhifww4xllm5f7k96toxwgtzartu8jaz6hegn4lrhgwhb2ap');
define('LOGGED_IN_SALT',   'i0vopglxqm0v3e74wyhwjqyg8so3r7enejqdqyvzju6i5z4f9byiwkivyifmrpzp');
define('NONCE_SALT',       'ejjvhpbtwxp8mwflzvgisdigui8gdufdllx3ygyjzqhn3bt4nurluk1s0ssyosxu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptx_';

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
