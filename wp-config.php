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
define( 'DB_NAME', 'uezproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'zrRE%w#{$VZ~e6T:gXOp$=)yOR]EG*`@~M2@b}f-o(2Q_yw5!w0:V8-R]XM)V+f6' );
define( 'SECURE_AUTH_KEY',  'W2i97.>{:l}I[w4HjZodK>;9|:[/6U<*^p4OMeOvjXf~&Q[u-NStP4*{F1p?K`;n' );
define( 'LOGGED_IN_KEY',    'QX!0gRFu##]<gx_ra^CKz/|EA+V~D3_Q4O`S-N^bF/uZl?y:_uzf*YcCf55us!wd' );
define( 'NONCE_KEY',        '03*)J0a+]:t9guy ~D|M]t.hO~EqT:vY{o4mh(cd~y:36M/^s2|edo>R&GS$o<iG' );
define( 'AUTH_SALT',        '2=r.~W&}U(eqDfEJ?@.baSjwySu%$){C?}C6:0,52ta ,SZ^zbQL6_>Y-}i ~9^G' );
define( 'SECURE_AUTH_SALT', 'KraU>_C.MkHM=dvQDOJsIr[nKD@Sd[KDsL|[,mD47Xbl u5+9WJb #Y_KxB`1$A2' );
define( 'LOGGED_IN_SALT',   'zg/mAU(a[AH_kPTE[[9RIqC3<0n6CvPy2@<_?iB_e?T4DH e m8@:AVzv~`SP;vN' );
define( 'NONCE_SALT',       't`f?@W3TG2/j~~}S#~BgS+wuyvyIWzKsPdsT;U!cL)~3OkE7e5tZ5sDt&V`& `Ny' );

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
