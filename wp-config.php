<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creuset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8O@KrmM.4]28*[*t7p#L8Bn ;XSHfF?ACw`:($d[;R>?3X#&&P27a9`Abgf*(0`:' );
define( 'SECURE_AUTH_KEY',  'f.v0IK<B2n8tEvh!&uX{tiv2k64iw@B2mJVa$ B5P}dy?S]7|yD1z=K a&Yje(Rl' );
define( 'LOGGED_IN_KEY',    '5|it.k?}<*vs%HptT%ju/x+JHXdzs=v&qUx&g$XiXm~Ry2`wTLn|+G*~i^.f]PFw' );
define( 'NONCE_KEY',        '4PY&b9Ehj7Bow{7K5xZ8BwtSR4`Ah{!g>agzy>bE}GM x r@:<U6tit8>sMSZOGd' );
define( 'AUTH_SALT',        'fXvwQi3-B8UjiU9WM*/O]o k5H:rU{pJ.7kw!~HdLPu/hp$#=L>cVCAYq`Pu*H>B' );
define( 'SECURE_AUTH_SALT', 'B8~aOfGM#m8db+MM_%ny8/8 N4: vxUE)T=pU8Hv$nyUk9zcvs>%wz,!;DvH18zO' );
define( 'LOGGED_IN_SALT',   'YZvqx}Cn}:5@mDYstQ-q)ZYn36e/**o+GSr58Sv!ZCK ~L-.:dbal]rWQpQ)&uB6' );
define( 'NONCE_SALT',       'kn|>9?SYl2g~wGOD>=]W+Ar2otium,o c`[0%5}?%f/HM&upi8l8P^=md=4y#yt:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
