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
define('DB_NAME', 'Webstinger');

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
define('AUTH_KEY',         'KYm@z$Wo)M$_wu.iL:Jf5:ecmZ1gA0E:^AAE9Q8xH9/@`_}+0bt1)z~~U$I6MTs|');
define('SECURE_AUTH_KEY',  'BEdf<PZM uG`SE~dafQ{a u=cWDfuc>Y3m+n+xTt~<L=;Th-C|LR@)=fyI[oLMuq');
define('LOGGED_IN_KEY',    'Jhvqc_A [A:T}Cwk -A2+v}^&KushZrCh&{WB,phD<Im&]N1.-!Z!^B]sEfOC}|q');
define('NONCE_KEY',        'i0K_?^HuT#$*HU-G?DE0FKM@,rECl4(lRVp<|;CbYo|Jk7H^F/FOoNw!e6OTGsT)');
define('AUTH_SALT',        '|70RA0)6Y(!#`srngh4R3>^ku[lpp A!<G~c=oV-7$.0Ok}U 5,]Oa|]7:&~QNm5');
define('SECURE_AUTH_SALT', 'Xq3btk{eT!G?9d;a[45`rdq,0O!kB]^!jWaodx~5aY3LJDb^]tkh;wcDE>th@5}Z');
define('LOGGED_IN_SALT',   't?es1N=Ge$6?ZKE(FxtR[O1IZlN>9J5YIOk!$NJ5T,~?)Rwe2vBL+Cw}/.KWnKNS');
define('NONCE_SALT',       'g6X_{MEKP#&}y| ~^z(!*.Eq7sJy0Aq,WCZA52:]xx=3~wI1!oK>OHBR_z9fd/%N');

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
