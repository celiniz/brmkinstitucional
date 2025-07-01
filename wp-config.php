<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brmk_wp_sbype' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '122112' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ZP70#21wj8~]822+bBt)6Lseh7CbYv17W!-Z4L|RzzJgvVj4-U6KOU#g#te9G7jO');
define('SECURE_AUTH_KEY', 'cLI731RnS9b6_+_mBtxrK-M~O!X0f3Hkam2dmuKE6z@A81w*Czvvc&6xD4HS&nnA');
define('LOGGED_IN_KEY', 'c:J+86xnLd/P70U3|mGt+bQ]/3y);+h%N2|3GO5S/+M!66I7*-ay2!EtG0N;rMBi');
define('NONCE_KEY', '2[Q*X;(o2-7p(K2yi4P2Pmao7X-1&R04WK69lN7EbA;w9O+|Q#(a:[Y7kG2I0-(X');
define('AUTH_SALT', 'LoXW7nO21l@B98c9T*8BS4J2&0eqd2/UDt)/*@2CXj_5/I6yO%A;!35)*C3v9nHV');
define('SECURE_AUTH_SALT', 'fWL5z7;eo+560UbXo;RlP09V4W9B8023z5ypQBJ|J2OshuyEPmsM/;+E34-]eYn~');
define('LOGGED_IN_SALT', '8xA6xiDLw35~#ip4fJWLO1AwrU@oGWrL5zeP[3]e36HU4V7kwvZZS8I&C4-Q53Pd');
define('NONCE_SALT', 'vj6xUw1Z;:pC4N15YV6W3z||Yf0CL8fk@&!#A%X*W[w-fnZ6GXu33R1]VnC-9[M8');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '7V8q9_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
