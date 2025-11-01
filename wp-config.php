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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yousef1_db' );

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
define( 'AUTH_KEY',         '4.x |dP~]b?nAL3Rp!#q~UD!g|8>g <j%5G^O7Ca2fPnQZ}Pk~*7I+vV,{2tYp#V' );
define( 'SECURE_AUTH_KEY',  'G|* >00HxOe|[ VM?FxJY5X]xtmQ~T#1c[e$tn.Bi2UF/)ds?ubov,45Gw#2S At' );
define( 'LOGGED_IN_KEY',    'J=Kq}OqFU&0<$w{%hf#>u)2j+7V};(JZZad4agVA.5gD]0JY/VV<&vp3h7tmz&Y`' );
define( 'NONCE_KEY',        'HfIWFRJ1:hH]!?@K]:$`!8y15*l(:xE=oGuBuJSv 3,)0^O|%^6S#&O*ePNT_Xh+' );
define( 'AUTH_SALT',        '^ZbZneFf(3&*f3a1Pj_-F#,/Bv[d0~.#RsbG(e9KAH}:KSsA|c-#IlIP3)lu`<zP' );
define( 'SECURE_AUTH_SALT', '{{Q!D(R6P(E{m:/QGp4EQq2d5UrqN,oRe?bjAsr%|K&wC>ws-j6ct58/5WZVVpo:' );
define( 'LOGGED_IN_SALT',   '5dl<Emu!|ZxU$*frx[*8BySs%smwJ nAsi(qe.=9t6_C]`H:GFvESw)6x.4T+9C/' );
define( 'NONCE_SALT',       'Y+]H]YY`OZ5Rfk:/[H?>2#s*1X)i|6P6qN#=t`UY,h<^n7beZRqkRY9AzuJ(<@T>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
