<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'homework_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f +SJ/=Bsj=+ N3|.mdJAIh3}Ogp;m `L^&BLc{TRlo+B>TU~>]~EWGt5#%A!<7%');
define('SECURE_AUTH_KEY',  'Sg;?fm@?q94LE,y=;0E.BAv8bB`+d{Z3Ee_)sek`XdtiY,YLxt)a,?#VgpqIO+v.');
define('LOGGED_IN_KEY',    '#X8+7tpEq)x8QOc^d!`N6S0ne3PsT_G*Ch-@l P GK:BNu}I2L}.jR-/]2#;V+Qp');
define('NONCE_KEY',        '*-qur<l+OeE^|0d#WgYuccHSdSn.7EYxrnqQ>%OE.1i|K!.UQp%#RMRjIW~hH*Bl');
define('AUTH_SALT',        '! =*JgmV8Mg,LQO||*|3n R8=2`Z#l9g6b)$T!<(t?##7C-eBTf;EILatrWv:YYs');
define('SECURE_AUTH_SALT', '5T;4smRShSB8lrIQ/XnU1]jKP|})P|_o<<b82jZySqv%PmM-&ksiHZ8BcYOCbyY}');
define('LOGGED_IN_SALT',   '&0L~~30S[h91kv?I|v>TjG=ug$@7~R760:j__D/BI[QBcWV+!YWTUbL8pyq+GuX5');
define('NONCE_SALT',       '[I/*Jo7V-<3s[S8!i?9[sQ*R4HSj=?A@`J90lK l#r5nY8L<gr ZB5R]2U7jlwUN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
