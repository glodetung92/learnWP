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
define( 'DB_NAME', 'goclamweb' );

/** Database username */
define( 'DB_USER', 'goclamweb' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '*Zo%$y^xn0!sHE:fwzr|<2>$V?i0;w)+DzWc(?3~CD6B_uZU5r2nG#_HN0k&o]c2' );
define( 'SECURE_AUTH_KEY',  'P*{#KBX-pEdVj{V,RTXqRP?i`O=TQ._,BxK.bAZFt4^FV/>cqLSd<,=>6G1Gs07k' );
define( 'LOGGED_IN_KEY',    'GU6!azA=$V2J39.`6]PHaw-zFor-TL4O4/OOl_lSb!K6^lqx4 ~ORKDw!]y@I=bf' );
define( 'NONCE_KEY',        'sPWOM>W#aI#NCHHN?/h>OYir(?g@~Xc,?N0Ez_x46)w@,n;mP`UA`KFe-.`ri+A=' );
define( 'AUTH_SALT',        'DbFk9mJMe$%SO%yJy^E7o_vwUj#?GY6tw,!*JrkKIZwl/^#gC2oUM1Ww#hru^/3)' );
define( 'SECURE_AUTH_SALT', 'u/gd<{,#6unDk;._++h*ZX5Nnn#:Dn5^qt-}i/0EpxiYZ0Kww%7~~d/__p&DrA!-' );
define( 'LOGGED_IN_SALT',   '{Kbhp VX=xS/LYARi?zPc,(.gc2_Az)NVbSIwsv!4sBqqKZ)J4L+qv%RU,SRROmT' );
define( 'NONCE_SALT',       '!rnGy;K=i%r8K9N8:(& Xc[11-]2~UzlkUmo67v8:St?Jb|kG82y n=l^l+eE2R_' );

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
define( 'WP_DEBUG', true );

define('SAVEQUERIES',true);
define( 'WP_DEBUG_LOG', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
