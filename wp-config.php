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
define( 'DB_NAME', 'muhaidib' );

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
define( 'AUTH_KEY',         '/MQUH7u|RPs%#1^zNzYR!AV=g M$ycjpcay0MsC-/[:8=WAhLx~hKcZ((6xd$8ID' );
define( 'SECURE_AUTH_KEY',  'Ima<:cG,;f:`R/ku V8uy~p-Dck=b/&f`?zC3x`C_Xh2Bv0~,dxpwJY}:1ovlQbr' );
define( 'LOGGED_IN_KEY',    'niVB.sXJV^riWg_XQ-xVTf8@6!+/tG/@tft7d+66l!Y_8+>U`G/UfF)R*tp KXer' );
define( 'NONCE_KEY',        'iqCmE9Pi m{vi=ik2;f7=DaYXhDdB^`bK_Dg3B4@S4l(BKe572t!e}Z%RQB/9J>c' );
define( 'AUTH_SALT',        'dB)<te>;(y7r>VA5-^UZqM+N61.oz0Xg|F>v|14|.y5$2#9:0OTgA;(sM2I)a4g}' );
define( 'SECURE_AUTH_SALT', 't$}Mph !LE1v bx=xb l5hXz,PEqr}&zL<zwCsmM&d0Rg&vtKgH{NL$>Sxl:~x6p' );
define( 'LOGGED_IN_SALT',   'S#H)n?t-P}gX^stBc.3B9of0L<PD>*}v8$@`j,L3 Ll*9;S-mop;yV!v-Sz%w.z^' );
define( 'NONCE_SALT',       '!xBGpX$Zi~,QqX_8k~?mHJ*`7nH~-I`LBd/P8wrw15S#;/m[ 9/gr1zJy%Q{t1FM' );

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
