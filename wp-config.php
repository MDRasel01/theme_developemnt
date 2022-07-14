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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme_developemnt' );

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
define( 'AUTH_KEY',         '>lDlt+dRQ3)gQ4KhkPuD^wwc+2d@RGMPEip.ZQ/k(cys^0.$(HJ:$[aT1@dP*b1<' );
define( 'SECURE_AUTH_KEY',  '+dYf=mPGN:~-Zdg-:q_&F)Jyq.q!j;+Xh3|}*65@+?7FZ1fJv3=:95Aw^srj31ww' );
define( 'LOGGED_IN_KEY',    '5l^YLK5Gv>H=XMl}Nn)`HtXlRiF}aj{c+4O.JWLq%kmE@#7SJKV)RM~R`3bLRYUi' );
define( 'NONCE_KEY',        ',:R Rf|23,hgSg0]M!{4A@t=k#gMwx1z]t4PE+0*7SD9vV#&/CV>_IHYLX6`;y!Y' );
define( 'AUTH_SALT',        ';U92~KA_@ZWQ4Q[hEqQyNp/#f?u1P:&:?=@(z}Uu)Ffe(t Ud8s*cZM`Y$MeF3vU' );
define( 'SECURE_AUTH_SALT', '8zU~hpf+^Nm|BYYUFaRs~!$mbB&U%puoCbBbWhr7/9/odlET>j3`-dUAuJbqd+PG' );
define( 'LOGGED_IN_SALT',   'uPU7_LXa|wV8C$Bp@#s?W?E`a].S@%& _<x8,fmNA{Vi43o)|6gKx5=rSGQD>Ba9' );
define( 'NONCE_SALT',       ' =$u.-w?uQ6{ouQ%}G:dg3e097T1s2C8-yyP6i{7/~^H0j]}!9Me^0vT_yj$rEM0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
