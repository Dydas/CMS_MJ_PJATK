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
define('DB_NAME', 'baza45_70');

/** MySQL database username */
define('DB_USER', 'admin45_70');

/** MySQL database password */
define('DB_PASSWORD', '7Mm7BzJ96K');

/** MySQL hostname */
define('DB_HOST', '21645.m.tld.pl');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u#:]/f^2@-P.!j.l>0-z,<X0IpW[J1^<rX2b1UMdhHrdTK.Bl,Ua k{J^eCBl^hZ');
define('SECURE_AUTH_KEY',  'M,/MmJi&LTFyO!pA-u{,=<xXN@FZi/-/|))VTjG,/Ql(ZwhfA^2seU5md#3o.+n<');
define('LOGGED_IN_KEY',    'j<]plePT~!y@f?qz/!(Ss4=ZF%it:}sZWd**%RbVN2?-c!&b~Y&wFo.Q~4x<?21[');
define('NONCE_KEY',        '63Q e)c=#J&Q[%[6W|0:e=f$|P2y,#R=}$(Z8DlfAuRgYg;9]/budh%-D-Ff;}.r');
define('AUTH_SALT',        'nNzq3Qo}&z.Q}/iujxi{%:?>&52f3*Alnt?E_^_j^qV$@j(r*w%g;jhqRK`yz[3+');
define('SECURE_AUTH_SALT', 'ST!;hY:CZ$JQlGV^s8BWBq!jsfN^Fx3K{+xCLez{a QVP?T>}&_>s,7ZTHpqe,GL');
define('LOGGED_IN_SALT',   'rNGPI2 }b?f4q0e2>pNLX# su]Z$fK=nQaCl-zeoW`br|R6p#nvXBvC:X2w>*^QM');
define('NONCE_SALT',       '!H$Kqe3xl|OgfSO<|,:YR$@^;&!t2|%mhGQ!L{Pi%:YA`j+:M$X7cwPqDgddTXaj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
