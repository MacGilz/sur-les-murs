<?php
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/kingbee.ovh/slm.kingbee.ovh/wp-content/plugins/wp-super-cache/' );
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'surlesmurs' );

/** MySQL database username */
define( 'DB_USER', 'wp_dt339' );

/** MySQL database password */
define('DB_PASSWORD', 'Ruw4z6_4');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '~~L)51z)wRv8]p)G/!_64y#AG617v/a]]pT7t-#7!Z8KG20u%1h9]1m;!uascl_6');
define('SECURE_AUTH_KEY', 'Nl(f-;75/pyXr04x8Bi3UFK8k%pIY&/_jNY4Xk/*~06x9vmmWp|8aW7@afRk17aY');
define('LOGGED_IN_KEY', ':cRaXA(WB|6Y2G8Q!f9FS6*]59|B4)1[xBnbnocP1LS6d]68~d2Z29S149#xh7x5');
define('NONCE_KEY', '#k])H*36NG)FD04M+6BMX77VQF-5cPB8hLw1H]O5RMRs5KA7S(9k1n]RmfEW40*3');
define('AUTH_SALT', 'x#]+8n+h%3Q#7E#dC&dYYX5p67I/x)06;|:nU&um9@CSIPsbnR*5/Uo&f2W@u3zx');
define('SECURE_AUTH_SALT', 'R3A:*49o+@!4AFZ@yLkMjc~x4436paT14jt2/iFsvi/017uV60p4ZUQ7Jw-GI26U');
define('LOGGED_IN_SALT', '%f76/9Yo5#93K7%ISk+2Cj/n2&/[1~S%&IFe@i&:-TQ11q#6Mt&Par3p|D2F#e%T');
define('NONCE_SALT', ';+Gd&_Zv3%g))gj58A9FvGt0zI|60O6Ap98y8O0]]6g)Y&E:M0-;8;#VR#jC21V2');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'slm';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
