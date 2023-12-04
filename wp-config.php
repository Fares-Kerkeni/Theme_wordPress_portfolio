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
define( 'DB_NAME', 'theme_wordPress_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'L__%0yCOCE(+Ypz*xeoLY]}ZcK1K#TaM7Up(!eJDx7H-P#>eA0k<Eh5]R#b[tCY9' );
define( 'SECURE_AUTH_KEY',  '(D ! D8$GkSvO`<mpacX81a*m{{mUd$[0TfOH#XBK0oml-}Ki}2ERv85G&KGf/$U' );
define( 'LOGGED_IN_KEY',    'euZbL7<sk[1`GXu+kR5BXW->zNVn,%,kP(rxY_AzGi~D{N,qw{Y5SgW;]W&yXpeB' );
define( 'NONCE_KEY',        '@Ub@$4p-JM[hrki^=n&h0/tf&X,VLaDA-mEqBqE2354Y@wgXBP*;nT[UPQT!Mm(i' );
define( 'AUTH_SALT',        '(Q1e;(P^~L?B=L`F$ts{e6)Mg=ks:L)T*YPts#gMqz;}3*g,V1`e?s&bTBtN5;0a' );
define( 'SECURE_AUTH_SALT', '[RgACEy.s8GV1S+ >`JL^&xRe#p7SB%}YHVDQx8Ly&#@xD#1N+^gW/aM;M&JYp61' );
define( 'LOGGED_IN_SALT',   '3vLDV~m)oPD$0#kCcOxh1{Q|6<^7)`Pu;}L>7BN?O^Mv7i&6Wc2{uotr{ZCQ1}uv' );
define( 'NONCE_SALT',       '_vyJ+I(0.O ~m|l%e{DJi0k(;/D<aYVe++a_Cr<l4->#ce-,/-o^bszG^_7U}JhA' );

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
