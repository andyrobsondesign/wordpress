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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'aRYA.(KXW9)/~.9*3ID,jukEJZ,x@Q{i^qTPo _|3L J/)y-s|:R(,hs{pvbIZ(h');
define('SECURE_AUTH_KEY',  'mg@gY JUU]%DvNu=g;&hU:+AS2shwvV6750&`&2)uO5EPbJzOhvC$nf-}{FNG.?l');
define('LOGGED_IN_KEY',    'vvsgv|duOC~bW6vq}okX#4>@@@Uzsm!+%SAyUvZnsQ*3Y%>eMQFUUqTxYU-}c=T/');
define('NONCE_KEY',        'zP0g|DqYmv_Ws^sFW=ij,iZ%}DOB1V`CAV},Qiz]{9m<#f:*p7ur-Ufso?a,OzI5');
define('AUTH_SALT',        '=r[fiPk-Boj$%D,NwiXGw7su:|9bQ2q1pxDE hWB@)+)_gcB0F40=f0,TTj?+@_2');
define('SECURE_AUTH_SALT', 'rhO=&OF2lo0_yoes*_r~M$[rJ`;-p2nIqooEt]<`vYByAX!w6)dl&gH%,MC:|8T>');
define('LOGGED_IN_SALT',   '4+O.B1cD%C6jib(KL<9Xa3%Swr~@[XC]4UVE=:Ve4[tLss~JTd)|U2owd}{E8/.`');
define('NONCE_SALT',       'MU2R:#n>.to78d]j?rj;E9tR)Q_DG6qKR!a1voLvk],WQL#1MvH!M!lZ 9?:%)S)');

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
