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
define('DB_NAME', 'wordpress-test');

/** MySQL database username */
define('DB_USER', 'wordpress-app');

/** MySQL database password */
define('DB_PASSWORD', 'rv4G98dyhse3EnnR');

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
define('AUTH_KEY',         'W$UD,`!|>CLo{Kf&MiNuG+Z_/b~NJX9[kaz1LOQ_g}*+|)LS+o(ze/gwN@Cqe^N ');
define('SECURE_AUTH_KEY',  '2n ,|[t|t+KXH(GU|DXFP#]qtQA~Rb{rySV?:P3_<e@BkD?TMH]iB}r6fF|/}-z>');
define('LOGGED_IN_KEY',    'svUS3yb|&>izK&nT7s:vEvjV)v`|I2|o2|. ~+4[SNRb]1^`~Znaqr{gu/NxzMOt');
define('NONCE_KEY',        'po@6 }$t>9N4=,&6l|p4Fp|GlRe9O+?D|?{ N=mu`}Rtx=`PyG/f`kMh8C z*7*0');
define('AUTH_SALT',        ']<deNzn( `??>/x9E2(hUwD^D(}fkLAyFJr]b&_)-F-ZkB,m,<u8/}[+t&|21Ryl');
define('SECURE_AUTH_SALT', '<h[|j+M)a|CNf%7?eMJp-w fE|n,-bjfZCf$>W(/:h(DTV%[j6ES,iE:kZ|h4whk');
define('LOGGED_IN_SALT',   '~?B>X+%+YI=EUL_Dkj>h:@H$hmlGe?![t62}B&@Dg&y1+,&2/3`La%l&lZgxk8Tu');
define('NONCE_SALT',       '1TSP0@mf -lLY%}8||ampGWMJ/e2,JML xVpUyM~rA)PP#XWbEM1RSBUg/98g1B|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
