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
define('DB_NAME', 'wp_legacy');

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
define('AUTH_KEY',         'z#s![,=[#:av<e96A+W?^*+zJ}`)i*2(S5Mde($c,6(SvQ~$S8.xSsZYqJA]s,9#');
define('SECURE_AUTH_KEY',  '_AXER<a>0u`m%3Y}F?A#IWi=H:Y$Etb,Dei9T}V`taozb,i=&xX@EH#CF0/1^uO/');
define('LOGGED_IN_KEY',    '/MW!A}9WbXyD1g?5GoD]m/uno>3(|=Z~C#:w7D.oamO+ OtdRgp>;Dn25S!0ih9&');
define('NONCE_KEY',        'cj3T[8V.]O+;o)iF.vV,fSu!^Hb<i 9@/-yb3G-8t%F:iX>)lP?^k$ilt$OKOhy ');
define('AUTH_SALT',        '-w1 }M@KMHAhS8rdq9Ld#H6fU-M#Cu(%17]M$AZ99me:]5:#z&V)FY6KcqnY_]W]');
define('SECURE_AUTH_SALT', 'w.V`NO>PdP[Y?#@DsC)A7m6?y7h9-@:saL<@G?6Ux6{?_.{#(7LefFhi}}$XsJvO');
define('LOGGED_IN_SALT',   '4JT:iW8qi>WZryS`O$RelaUKZNS^7}@S7^^W/`p1a[w<A,qGix]0}xnYm6%0NK=O');
define('NONCE_SALT',       ',.Y=h*dCZVUMXIi|$1JFk0lrbpl^!_:C~x-V2[|bdzMj r$v|.QKhw@][]k/Hp1X');

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
