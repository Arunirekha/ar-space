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
define( 'DB_NAME', 'db_aruni' );

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
define( 'AUTH_KEY',         'ZECIwktN#qUjZ.. cP?9@w0^`G%vi5yKoyfyz*Sw>%QQa|1wECEW~#$|vjX1=5%*' );
define( 'SECURE_AUTH_KEY',  't]G5j|zD[/]N#RAjh[l4q3wnrfbk<OKI4H]CVC5pe7aRYF**P!.]o0;?)d~]=m8J' );
define( 'LOGGED_IN_KEY',    'WO7/iZx 4>jGEAFXr-?dz-?+~T*[Bj!yK]IJ%1MTt]Fbp$$yeh.~pEpj!HGYRm-2' );
define( 'NONCE_KEY',        '1G^YP9hObm3DpQ/KjFq+>B_YbyJ_sRI*)>Ql*A{>rc1;Vc?ZZHRP}6?t(lW8)!W(' );
define( 'AUTH_SALT',        'PC4frkN@`?y-Z[My+>^5D!hO,o<Q$`ER|xv0q$h}X^QF;s*9gN{kZag3acMx=gp(' );
define( 'SECURE_AUTH_SALT', 'y-sU_P?CJ:8f02kP~?uWy/4=R#w8:JlL+d+e>~{h@;q[>v;Uc1gTIk-P[KF>WqTs' );
define( 'LOGGED_IN_SALT',   'RK~d1MaMnEQL|W9F-l~dx@O/.7V=<:2V_!<MpAo8m`=/^^lVOEkTSE%&4T<@HO0a' );
define( 'NONCE_SALT',       '@KPW*5i|=:(&~@c_|5{B YUqq5ck*_U01hO=BG;.|s6rt{kihE&4bn$:jB{OZ <Q' );

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
