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
define( 'DB_NAME', 'site5' );

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
define( 'AUTH_KEY',         '0y^*i&c8kWR{8yC8wbedfup7`M.6A[yoFj68VRBmV^j{E,t66t{gUehb^KoyOfgf' );
define( 'SECURE_AUTH_KEY',  'm0>0r}j,$ gB_cdsaRZ]7;Z$08Qf!O|^()94q*s6~w|>%`yo_xD6Di@OgS`9~KjL' );
define( 'LOGGED_IN_KEY',    '](egJ/3*!JCsLP~C2p _jYO@]Tt&_5@@jV6wMRaxv4a_`I1 qmmDT0/k ELg}DMK' );
define( 'NONCE_KEY',        '`Jeg,(hF;Etg_{v+Y7:24l(mxzMn:cB{A]c=8KK6{`3`PvYNckV?QMm.PCu)_kjD' );
define( 'AUTH_SALT',        '}=l^{pd|*c}sXVqcSK,sUl%q4f;k#Ong{+4OQQ1MMFP,aph6.e`YM TMTHhT((#Q' );
define( 'SECURE_AUTH_SALT', ':+)(MmUaxrj#hWheab0D$t:rBd(d5Ed<Ywl9$2Yc(>7{Pt3+BXa,/z`3&@j5AZuQ' );
define( 'LOGGED_IN_SALT',   '~{8is3k/ha2MTmLjJu,$]Pxa--47n%([ fbg. 6R>?^XkS=KysNn_!$=RFwW>OWB' );
define( 'NONCE_SALT',       '[/%w (nh^Ys/x>%&2=!z+|l6S:_!EF?5M6RTJ1z>qjv[SFY`d2Yo63%1E#}{ LMV' );

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
