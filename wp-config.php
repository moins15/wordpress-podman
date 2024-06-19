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
define( 'DB_NAME', 'podman' );

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
define( 'AUTH_KEY',         'T`W3pd2,5;wJ&4YI0]Hut2Y:>0#aY}=:)AF;;{Kkd]?ScItIU/)zvY~WfHQt_wjU' );
define( 'SECURE_AUTH_KEY',  '_Uvt>KSQr;:2^>!,cM8K@xL}h:Z7&3C1brw`U&xTGrH`*E7pEH~-r&@/s~g--E6e' );
define( 'LOGGED_IN_KEY',    '_pz_VYB~w0UcF>Y)lwfx2`s325b1~qBf#Q=::~_h6[w<0os]nZ<sE8lP:@9jAPV[' );
define( 'NONCE_KEY',        'X~([`2zZyM_L6ZyPi}<%a`!*Mp-pdS+`zy/6-M@oL]+RcjXC)[doBdBhi:-i_GSW' );
define( 'AUTH_SALT',        ']@gZc+Q6<04/vRaWi)kWT+ ~1,sISMUKj@D+ynu@BO:/.>x:#=/cL7)Zdh{SkI@2' );
define( 'SECURE_AUTH_SALT', '0Fs.N8Ay>w1 U<L7>OEBo=1f>3!?Q{]j$q;9PB{dzkfycqI=,$^-*2?=]mdTksN&' );
define( 'LOGGED_IN_SALT',   'yswQ8)}G<HzJ&im%*I6KepHq3@p(Hm,oLlDsEd4qG;h -eP]$[70nq6O090ZN~%l' );
define( 'NONCE_SALT',       '4-dkXqt[bI> cKR8 DmhAW6bEVp%,F=y}g-Dh1!gbm:<J+a{pb B 9%-^+~!Te:s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pd_';

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
