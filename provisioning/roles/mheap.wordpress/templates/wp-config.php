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
define('DB_NAME', '{{database_name}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

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
define('AUTH_KEY',         'k/u<5*>FvwJk0EjvMWY+:=<IMwp5xb<8)BXN,QlH`U-rMa#FD{<Xh2h*R, a?n17');
define('SECURE_AUTH_KEY',  'eJkG$C6}>+>vbXIXq+D56RawmtLY(x@v1*oG*q-_ourRHb=.4-=*t`>rIIDmT`vZ');
define('LOGGED_IN_KEY',    'mL-T,Hd0zC@cQ-4>pK<YpB{Wwc9h7MXvf*kM8.Qlo<`t47<x1l>AfebhXQZ*W/un');
define('NONCE_KEY',        '>y^p={[R1vAS;ihev06r9LcD!x6r@611vtZh.oj6AQ(%Gsl^Pl^JwMOY[XFg3=D1');
define('AUTH_SALT',        '][d`u0ics<Z^N-<5Z:;zS6a?%sX0&I#9}O`-pDBs%aF;Hyy!,|~mP,G5oF,9t5hq');
define('SECURE_AUTH_SALT', '>fJ2eXJ[qh?@vI=T~RXBuWhqeWG)4twXGtJk$9B%!jqf$yb8nWN3C%G|OM##smrJ');
define('LOGGED_IN_SALT',   '-6Q~mF`NzE,ZjT8goo_CB11c,*tX7? _Si)[Q~g<jPRF<{LCdp0}19uLpu^A8U0p');
define('NONCE_SALT',       'c sU(@P3>b8xV#z{KbMBd,5~FbIw.T$K`jQ<0W[ZvC2_si_t~K!&6(=Z6ELtN}y/');

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
