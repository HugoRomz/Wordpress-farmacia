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
define( 'DB_NAME', 'farmacia' );

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
define( 'AUTH_KEY',         '8xd4(pMwZ|sInfLCgx{tS^9[G^a^+z2xfi#bogYxNV;o^Oni2?,;d)WL!e|jXdx1' );
define( 'SECURE_AUTH_KEY',  'qNmlfv5;^[y;6XzK,ywi.jBf2H<nMHN&N?tV7O2}L,RKgu#;PhSK|B4lqU`(REub' );
define( 'LOGGED_IN_KEY',    '*9iAAB|$oOvi*tTxcG91/;K!IYPZsAhw7_5t~7CbvA/.0k`&Jbnyt8Vb}5Vvhmj5' );
define( 'NONCE_KEY',        'fY?>7d5Pt5lr4KO$(KvS>pwB!m!r1(~w@pZ+TqQuv)_uV..Bn$15qW:hb2E]3LiT' );
define( 'AUTH_SALT',        'EyMH|D3,|7k-VT,1j+uWKASXyXc&2Tb8OwHET<vpHu=-5}+`@bpi19EI?)!8{k5>' );
define( 'SECURE_AUTH_SALT', 'P09:@FFn1*(K74<0|@+D^G:IeR6.48Xy.+#6#}i^Ee=jE$2J((S>iVJc:m+l;soF' );
define( 'LOGGED_IN_SALT',   'hBdPyIk}C2p}SO!Pgyd{@Q2Do8,AzdCp{/*Ni-FD~OuF`hO?ET@0%+7_]yd=3S.o' );
define( 'NONCE_SALT',       'SwH63^c)LFMvJyfSRT,FWUK0z+mzh+@0-7tE4&ei*:s6_V$`8AeJg_WYS6H_.2Gm' );

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
