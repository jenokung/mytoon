<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mydata' );

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
define( 'AUTH_KEY',         'eAGANu/+Ki(dceA/b+)mCKO(.BN(K_wk%rU=n1H$HG2- gz9u.p$twJn&65WXbzo' );
define( 'SECURE_AUTH_KEY',  'u%{5R~70?i,}0r(Brd=-H=X?d$:@>-N[b$#Jn-:8LM^8Oytgf[ LY~|6oYN>YBh&' );
define( 'LOGGED_IN_KEY',    'o,mB#W3H+A*stdstAI0D_g7k~oZEA$pEO,lB)_b0SLbhfe/{4/Mp`QF>Xl3S1&aD' );
define( 'NONCE_KEY',        'tzTgKDAljt)9x?MbKmv5R<6ssD=}(kqubwMaEp?%,aLf)Vxp7Xdo$Oqtf]ZXZNy#' );
define( 'AUTH_SALT',        '<aRNi&zENsQMQlUa|aOwY0%@!<mp5B&j`(P@bTpnK*Z`:>r_Y+LUgBmcgyMI:&0c' );
define( 'SECURE_AUTH_SALT', 'EwQL=/C}0fCFvg,_aTrfRq7]cRn:jg,7AYk(tPwQ=;gGM],l$BkIL?-Faz&YDoi5' );
define( 'LOGGED_IN_SALT',   'xr+pig2ZM;-VmF1t``~s`TGu2?X_tK&CoF;h|1y=:9APo/n#6Q6n tGXs}oE,RqJ' );
define( 'NONCE_SALT',       'ZKa)avj`&I76nLPD{=Wz7K#~{x4l<^XV|f9_i-)Yn-EdK>KwB%h|.Cpk6^&32GXx' );

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
