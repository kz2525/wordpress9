<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xyz' );

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
define( 'AUTH_KEY',         'b<4G|HW+;xNGb5ik[m8  v#A_[`WdT-rZ@elu|6 1<A/HiV+P,3n_vfhV.?qfh>T' );
define( 'SECURE_AUTH_KEY',  'a?A[%nM(F_:@!40iT;Ff[I;z$Brl$.doOCAh=h;9`U>5 nD0w%`N p5&[=_LG2n]' );
define( 'LOGGED_IN_KEY',    '=soY}](0T7jBnd~<U?_09?yQ&.odU8?;`}[yIcX+~FQY%.OXasIe:}|?|Z:CO)Pn' );
define( 'NONCE_KEY',        '4PZZ)92s:^wXwbDgSRV7Z$?e@x}`lM-b0i!7kOtP|Z(J9NC`t7&Fl`zPf%FQ=7j$' );
define( 'AUTH_SALT',        'M?0}cUn({Y7wkr2$4?LOJb:|]9(4xI0[zw2r~5yZK]|$(0 ~FqN}&pC^}kF8FINn' );
define( 'SECURE_AUTH_SALT', 'VcQu]+SA}eFk0~ZHFWHSSLG#4@kRv9-^uV0Zz8uF`TZ%FWlTY4A9[l!}*@@J@qA-' );
define( 'LOGGED_IN_SALT',   'uFb1.[Czmt~l~hTIEV$n1}_(.JB4ZAHU+d_p%db^zxD]n7QR!4?0pZZs28Il}yv+' );
define( 'NONCE_SALT',       '<+$0z{Z}!=2z}g[=*=Rt#QE;RRN@t}fMP#J|eG,4JCl +7xxN^8Yd(9d8^gh?dqN' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
