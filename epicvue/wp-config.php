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
define( 'DB_NAME', 'coding_test' );

/** Database username */
define( 'DB_USER', 'epic7_dev' );

/** Database password */
define( 'DB_PASSWORD', '3p!cD3v' );

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
define( 'AUTH_KEY',         '3c_aTuAWbncz6R`~h&riWq=kdvpW)]6>N@ F/2VQy{H3g,}yCc[?!nP2A~He<oJs' );
define( 'SECURE_AUTH_KEY',  'EsjM:4L-(1ASZXstBwfHT3=^tl3a~#2FWcq$*5b_2V=?nocGl+rA$6wMA;L ALy{' );
define( 'LOGGED_IN_KEY',    '<?JCUA%JG_JdPYF8*yNjqR@Tt,{`Ja$__~g3U=2^e+kW.ga0imtyi8PveGbV~#>q' );
define( 'NONCE_KEY',        'X#%cO@Z_f&KM,0(9u|6o,hm;Q[1T[XNU6tmdSeh*iR7LZ h/xFc^+YDGm9RX`]ks' );
define( 'AUTH_SALT',        '^H!uOH3%fX+rcDua1AP|<}om>je)vq%N?if`,}xH^F%T;f-Tkz&L&?UM|i BM=]b' );
define( 'SECURE_AUTH_SALT', 'mFU{?QH`!SfL87VFDH#;J7u}uG*}k/[4DI-|_`+c?Y4D~ -A1)7RB622dMZ]=V|~' );
define( 'LOGGED_IN_SALT',   'BpzrfB=r~fL;t=F5b^^BK_3{2KCetWi^g{fJ{XAleYko@&tf@ 9J-hnw{mv(btJr' );
define( 'NONCE_SALT',       'z=jTFbZK|OV<wYg&GWwsA+sT^k;$B,i%__pKP8|e+-_/P^0xoBvOH .L~/m/Q>Y+' );

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
