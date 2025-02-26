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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alien' );

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
define( 'AUTH_KEY',         'kY`fJ1B;6F@A- WX4[P%@-`i`%57nKf2+D?0G%hpm<?Yvk,x@#A{h_^#?Ix@VFzR' );
define( 'SECURE_AUTH_KEY',  'grD(!Ne,!SPJWe1C0fs=SKBD)vfqhBaUEBS$.L~eA;+krdLSd_&bUO7vxhQMD<QT' );
define( 'LOGGED_IN_KEY',    'ARaE}%U!PkeI`>#h$pgT!<n)WRTqDW32jH:%}Kt31g=l/VdT*_8*d phBEaaT6Q7' );
define( 'NONCE_KEY',        '{$(^wn(&p4G((V2se$(P+FXjJE^<diQNFt^~gN}`Wa2 ^h1Bn<5g~[SbDT)M~yG0' );
define( 'AUTH_SALT',        '}.poqLb`}TfNi>j6X-##XB*4_haZcfpPDB#Y#N/oon&zL&46(2Vf$:+4mJ%|4+),' );
define( 'SECURE_AUTH_SALT', 'GlR_8=*k}3ud)Ixl~%$KR R%/bIo|Y;xN$U,b2=]e`{>aD+t-3uDrKokv9U]/`9O' );
define( 'LOGGED_IN_SALT',   ']U1~;5vQO,&w1%Pz[(+_w;>QS2Vr+X6jjcvvmA2<j%^|_8`1p_m5ko[V4e4A|<;H' );
define( 'NONCE_SALT',       '|2W2gAk0zGQq_h;RW$ypd~ZP47RQ2nC{:5jw6!|H z(*0U+b 6WGOD^U8-17:r0)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
define('FS_METHOD','direct');
