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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         'pnsxX|1*RvvUGP~+}LK8>L8v&g?Lj9~jL5y(?L@Qz,Xzf^uNDjcGUG7sKl6xM@Yn' );
define( 'SECURE_AUTH_KEY',  'k+g)oYd*<J88iT3 : N~vCq(=YSzt}6nx{Okt6P`:k8>zk:Nwq)3UH$NW;kt^W4v' );
define( 'LOGGED_IN_KEY',    '``!fcW2W&yhqWNbQ;F<nWWsJ:fWR3jHXg6m6zgtRe4MR.:i)fkwN>[dU.v|(w6/3' );
define( 'NONCE_KEY',        '(}YE@jP^Zt_LAWJ~Mdd,Cr4tKxE2s]o^BuH6]Gd{I;CS70b1DcVNy^WS@5E_tBp[' );
define( 'AUTH_SALT',        '7P5/JiomSin(q-p9Us8$8H*hehUx*8}&_&nUmP~#y&E%#h$PN@F[VOA/yxC,]&X/' );
define( 'SECURE_AUTH_SALT', '{;Q_3UpP+y30ZKCOWhQ*-z/`;*S[}0x4ww/$-@hKvIF;9D~W<ZDV11#Qs52b6ZE;' );
define( 'LOGGED_IN_SALT',   'O=fwduwhAa6%dzu4=7C>UHd!&`a(!|Yxi^3J1=.9wKL]wUwI_kW1wNgRR/*wBn:T' );
define( 'NONCE_SALT',       'IhDA6ta+b~*7u=kz.V9.}.fe`$W8G)<y)W.=]$ye6c7DR 892] r1|*UDmW`bl$n' );

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
