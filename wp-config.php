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
define( 'DB_NAME', 'Homestay Cemara' );

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
define( 'AUTH_KEY',         'Kna8*.g_U_#biw5U%F#?xq>Htnxb=r+5_>%oRLWA1D!{5c:2K8pfN+ {4D#Nz0wi' );
define( 'SECURE_AUTH_KEY',  'lmpxT[9Xo ](Bo@G:O_X9m9BTBy:GSBn6ZrqT4JXc`T[1Ut&VVr$[$.ZA.N^>4xt' );
define( 'LOGGED_IN_KEY',    '0E`;sEHB^i9[`5gyF<&fZn.EC!h+reZl_9(LC,2[@FYMqDy}-<5+]T)|<;sG)1x}' );
define( 'NONCE_KEY',        '#lLq=:iBz0LR&@?fjY{`fDB*|Ngy#GA1<oe *EV&sL:gYw1Gng&m7Fa*c Iz[(v?' );
define( 'AUTH_SALT',        '~=v`-hieQ(XajqhZS S+[KD@zM0vOdQZqaawUtXIlVtSCZ62LVgLT6~q/W5S+y^!' );
define( 'SECURE_AUTH_SALT', 'n%Z*LDM:C=huTGUhEV[@$J+QI$~u)5Wa>?e*dh#!Ik+IK>wqmH|k8iJD>}%:f=2%' );
define( 'LOGGED_IN_SALT',   'W5-}4>s:mitC+=r;md}JRYF%J1m<H=pRwF)Q<-||KfO>B8x|ZOp l_Asb@~oh9`n' );
define( 'NONCE_SALT',       'fkQ>aPi~Cv#{Q~4F!CahN~Mfm3D8/%KfYtV-L&s*if40Q)wELb[r4L:?`4)6s,=M' );

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
