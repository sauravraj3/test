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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'XOdP54-H3oM#AC@R;T;&e,d0(9c!0NU!$:h&;Cij<@uR-+)IdC/DJll%VGfe*3*t' );
define( 'SECURE_AUTH_KEY',  'n^j;2PTzwio/`]v@Q?)G)vbGn^ejp%BP?XG/A$cZS%mkRht-?vyN?>zl>z-/lz]K' );
define( 'LOGGED_IN_KEY',    ',:nT]Nv&?Zd~/|F72|rw;WGi<|l&3&xV)#C`7ph|k%4n]bmt]16I<qr+H$x+S^o@' );
define( 'NONCE_KEY',        'wAaw>PBd(?5={*V3~6dKf#1L#n]}&(k|@*8)1_Z{oR[9RfLMS7XrlpZW<5uMGXpC' );
define( 'AUTH_SALT',        '1Y_%|>:aDk;Jwo>sO71:Nw<HK:pKh#qx?D)a{BEd~?]%X4-l*}Mzlsw_|)n>1jdl' );
define( 'SECURE_AUTH_SALT', '!hF#bs)qL|;Ldo,{Sf8&jR=KqU!2Fm ;C68],FC2&1`P.o{lWSfCQ^6km|WVrn$k' );
define( 'LOGGED_IN_SALT',   'C7(eB-x3LT{-Hf:E/755;af Qjr(b/D18x?Vn1Q/TS$?jmw@,qrX!Eg^W !=lJ#6' );
define( 'NONCE_SALT',       'Vh|P !>$LI=s2#+7Y=RLE$`DnnXxx7cvT<y8n*IQXKtWz3-GNXu$Gh%ig%?TQg;~' );

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
