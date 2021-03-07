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
define( 'DB_NAME', 'highrisemediasolutions' );

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
define( 'AUTH_KEY',         '(/nN*tZ~V+|F?jla8@X}2[tW5plf$oJVZYXCp{As7]k1y@_#+oY0onZi|sTZnBqx' );
define( 'SECURE_AUTH_KEY',  'f`2|)K5YFx:?u;F)9Na:oMR5l6B4+}vt5 {l{YPZr}) QDSUESm&Opf%=Gx9K*iu' );
define( 'LOGGED_IN_KEY',    'oT!d:T+8[|d0XJ$](E,Uay1OdKO3c{a8=`WVfdFPS_*z{0CNi79xj{7?GLZGX=3!' );
define( 'NONCE_KEY',        'US`@Uw):ST]MVnnC:}eX3MxZ>~t)dlX:`LHWIv*=$%|td$*IFweZTiu!k}7&%d(*' );
define( 'AUTH_SALT',        'DN,37<TUS<2Ms5BCphw~=lCW_MiK6[5Pk@Ff%}~%f`3}eb;V_1{<[,* KL-DUu/3' );
define( 'SECURE_AUTH_SALT', 'OSH,yWK=4SU9l4WTBjmcFBIQoC|w>L8tj~vfJsA-I67*Ld!63G{(T{(C!+*3>usE' );
define( 'LOGGED_IN_SALT',   'C|Q3WJ~eql}bltYg *7Fq%(lg+Dj]lZeS:Hm1pbclIQVJFSILHt?xQ([<@_NCQ[~' );
define( 'NONCE_SALT',       'i%)aLc/g/XTecgz5N<FTk`:j!U<p9@CI]!JWPD2g%pRo/Siq~J/<r3cAO2Eh$GJ$' );

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
