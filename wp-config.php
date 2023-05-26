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
define( 'DB_NAME', 'gajera' );

/** Database username */
define( 'DB_USER', 'goral' );

/** Database password */
define( 'DB_PASSWORD', 'addweb123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         's 8W-ekLNzp_O@g+U},%+]cIeZBK3=Wgta[bzgV=2W&F.v--)+.c~rV+Hpm+h/[[');
define('SECURE_AUTH_KEY',  '@<KQ5?.zvw(d|MS=YiqMY4WA5Fw=X;pP`-?Cc2mQhy6yjNR$2*uSM,XdG{.,9#n!');
define('LOGGED_IN_KEY',    'KS,-7awQ$|wRsm^di?i(LA/)2xRrc)?$1AoHVdn-g+|GC:Ui<zPVPY$QpS`4Z/G_');
define('NONCE_KEY',        '~}=cMfCxD1Gf;2R[J#eNX[mXkk-#Y7s~&:&ODUD-L>/J7M_rg:4A|HefFPmA_?I}');
define('AUTH_SALT',        'rF*XO}-B*LvzhQ.GVpl9Tro0:,P(Qv;hn>bylOqxTcQDfE{6}#?M=d9^0;EmA?oN');
define('SECURE_AUTH_SALT', '(g2K6/fA1zF0Ld3cB-`!Uts3|kbofyo2?,D/Y(Jz;x6RnI*-s};6Y ?|9s+| cA!');
define('LOGGED_IN_SALT',   '^eZMUM/ue1$ Xcixv_nH>5N9Of;SD/Lp5.3w#N6fc%dr|tdu$Ge!Ikl4daz&fp}F');
define('NONCE_SALT',       '$c#FDjo-*|/#DI_@0.~65I>Obz*Y-_m>7ZEYeD&~JG3I8UAj%^,x*ud[x[--My^B');

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
