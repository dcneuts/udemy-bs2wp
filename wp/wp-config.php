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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'nVilymzpPtiks4jS');

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
define('AUTH_KEY',         'cC)[<|ca U-6G7S=C$;!S&;{K/u.;2{^>r4.LsuE:J2ISFGb&=|0Mheo_pa%G_=]');
define('SECURE_AUTH_KEY',  '$)Z{<,yiBzW4W|j>XsgyR4k7S^c)h#H|2L)L<lohmPlqNwt6(@gm`(`f=SW.HL>1');
define('LOGGED_IN_KEY',    '| -L<6h3Js`U&N9O#bY+P4pMx}7bu1-}HpdV}vRT :WvCUruZ8tov.5;G.+Gu9`>');
define('NONCE_KEY',        '+G^[wpf.5xUCV`!qoK|rHy sQl%f5+W9|w.Q-TCYw/o)-@rP8j-oyu_bD7&L!w s');
define('AUTH_SALT',        '1Pfayh;MRc=dPs:eEEf7BGJP-UMzi=e?e|boPVt59UE6mv#x`U@S+l<eVUu-+2<S');
define('SECURE_AUTH_SALT', 'I3vmQfInVMF8VxqAI$k7 0@X(N{&J+-;`]6jR_qo;0taO{VZN>-V>6AGN-uz;SHw');
define('LOGGED_IN_SALT',   'Yl^C|x5yUh>j+r^)/|0zmHuG  s],]F/u21:L9Ie=D?:l]Q*+28S~eK~:KE)9x5B');
define('NONCE_SALT',       ']6xg%:eaBJ|#m[$;i:$;l0JbnymqpnU>S`gBF3Hum-4s-;H+B>02e=o}752.L@3G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
define('FS_METHOD', 'direct');