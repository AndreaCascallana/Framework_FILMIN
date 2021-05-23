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
define( 'DB_NAME', 'grupo04_framework_filmin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         's[K3HL|FW >V9^M&PW5ofCzw)+UB| j:iQ5Z);vIJ%Z/56(D:?O~2024Hh/zV:6:' );
define( 'SECURE_AUTH_KEY',  'zH)DPZ=jV9$@P/JW#-p]*0Nc=M%Ih YH1AS/<}($WA=/sG~P`Q3WVftG>;RS=/Hk' );
define( 'LOGGED_IN_KEY',    '4FJs^ ^]/-Lf~s@oQH58.$8<SP*ij}&{Pv<h^Yva)+i,4N*WEEVta2RAl)+LAJ(R' );
define( 'NONCE_KEY',        'JR.wy6k{ZKOtBt(&+?:!2|)rWEQv wQeU,K5KgTxX!00qO12E|<P9_~}j~6HnmUv' );
define( 'AUTH_SALT',        '7H_84yHjRcMm,ba}01zm.ka($phDf,)(eH~h0Cz+ pKi/uUN5KGRosEHHM(=STA<' );
define( 'SECURE_AUTH_SALT', '8v0]#`_L%zUYc==c R}j>feRI!K9Vo/V~{,tBBX|s</J2*6U?fvg~L*^(;){c?~E' );
define( 'LOGGED_IN_SALT',   'WOG_/ ]2!*~+I480{%1_dsvYs~[NO0,bNd%mJc)f`%zBl)#h*&U@tMmx!@a/2u8T' );
define( 'NONCE_SALT',       'XKY$04au[B[OM-!!bvAl@*Gr966sG9o[qJE[HQQAwA#8.L89-h>z$*)m@9c` Pa*' );

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
