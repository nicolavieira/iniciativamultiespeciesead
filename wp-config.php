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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1Rv-/S-4@LiioHT`h}a0[GLlZJj8?[qj2;@+8wKeiCFtQ,]mk (0^k(Kh9@xX45q' );
define( 'SECURE_AUTH_KEY',  '4YyYs68taH ,:T;lWLzAa#9Ja,N13a4GAJ4$ BnsQNjn.V +HWEk4?^fLs]_EF=l' );
define( 'LOGGED_IN_KEY',    'rE{7g&rJ%!GuHiZRIh.r%SXq ?1T6vikg,lyg)=bA#89E.N+G#B]48z[YaWB(%Ma' );
define( 'NONCE_KEY',        'kd43tUkmp$W2/iiSS+mi/N)k;t%SiWinDTsJj4VD((d>R?Ivx7EPuLv64LPY`{Kw' );
define( 'AUTH_SALT',        '+j;WA~C8=J0Fj%x@EUfztpKuz+*XU}?/jG!f7LNP8=1+evmlXSC9FS{A<c4~Pb21' );
define( 'SECURE_AUTH_SALT', '<ysh$/S-gBd2|)2I<~xM{ed^,FBexx;?hqASm}!uSbyjZ2i~B]VL,%2r$zEcwj=J' );
define( 'LOGGED_IN_SALT',   'fZ<SPy.]9sgcF<CwN@S5W|[XB3w!h<a;&M~m%3|Vd{bBMzchP4]s:SEqV0m`$Xq$' );
define( 'NONCE_SALT',       'MO9mM}x(m}b:A4.e7*B1paN!2%mf%SsiI_w3}YQvU:G0,2Pz![0GQOd4J6vE}q n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
