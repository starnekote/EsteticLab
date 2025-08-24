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
define( 'DB_NAME', 'wp_esteticlab' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         's(M}OY@To|qzmMC,dz4EyS2{^ ndI)cOaL>l#7^P>,|Q.tofrh8S)lu+q{{/(>&E' );
define( 'SECURE_AUTH_KEY',  '&>6k:i&~D*<n-e1zVA33YNTRVlaIsE}^}Gpx*~p`,<B2DoGK>&(&mTt `us#@Z3r' );
define( 'LOGGED_IN_KEY',    '/kMvz3&[f^G}~4=hT<4#tLggaa,_G3weWnklR iwusc7Nmi,ZlVf&9AS4l$pCEu0' );
define( 'NONCE_KEY',        '$OBr-4]!Ke_wj#dM/SaAN~>4/xOt>JN0Fyxyi[pilcM&|1{];+KoX+7Bzd$.7puz' );
define( 'AUTH_SALT',        '}HRH r1BM)CC?9/b/S<6%26i2G~/gG$[fX>4g-*F^(ZLuW6#w+W80zz, H8j)<z^' );
define( 'SECURE_AUTH_SALT', 'V`j Md5%rc^4li[V/)t%IR,rJD tU$TM$ c|>|IT$[R[B`p0=ESU(enUxht |A)7' );
define( 'LOGGED_IN_SALT',   '`8)Vr,l<ntq}eD_]>D9|Ve Rzl+KjFXIp#;cG`kkJ.tl,t3:;l|~;Prhpti;n,yz' );
define( 'NONCE_SALT',       'IRT-#5DMlG8Iv}voanf9}/qI^Ao(fC#Ei(++ffDOH1Wy;@$4>uRlcK0(SMf2Wg-z' );

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
