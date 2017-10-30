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
define('DB_NAME', 'bigquestion');

/** MySQL database username */
define('DB_USER', 'bigquestion');

/** MySQL database password */
define('DB_PASSWORD', '-p2aBS9E2-');

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
define('AUTH_KEY',         '5gzims0pts79rzy4xjcedi6enguxzycafjr0cfu2zai85sassvsxx2cogomfyvbw');
define('SECURE_AUTH_KEY',  'o0bo7gwaaaxnbtotyoqr1mzbmdsatr3di7f7fmcn0tev1ciavj6q9jrk3qvisimd');
define('LOGGED_IN_KEY',    'u8ls2osyto77yqdtejkk9oif5ck6wikj3eshoht6k94vvhb06kuwwkstuqzxcjpp');
define('NONCE_KEY',        'b1sufnf8codfhk21qwjksow2p0zpk46nrq9hzg4csmszkcl7uimiysucbralh1q0');
define('AUTH_SALT',        'rmubbhdsifnrohlcckrp9vwznkdv2dpb67ajajctcwqg2mq3yn7ruix9mmeteufv');
define('SECURE_AUTH_SALT', 'f7mtk9ni1q8ea8m2bhyb8xuqb1ylkehdodcqravtfmmtre2e5tai76gsz0jpxx0y');
define('LOGGED_IN_SALT',   'enewkh4qficsjqrp3bb3soufpdwrhg4sr2qzditkvp03gggrzteuit2m9yilino3');
define('NONCE_SALT',       'odepgyiwtbe0eabrbidumynk9urbwckratmihlexruioqsasejsjzxnvrkvmwqeb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbg_';

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
