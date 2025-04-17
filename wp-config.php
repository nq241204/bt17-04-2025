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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\cnttepu\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'cntt_epu' );

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
define( 'AUTH_KEY',         '@UP2k(&,D>g~O~dqz}Cz<7o 8`*c-d.@]|Y~%1!s]^Zgo[P<cFezHr 9U%;rNL*F' );
define( 'SECURE_AUTH_KEY',  'U|gO~a?$;F?o7U98lX]%VmTjgEa+.FC(y+P+ w*i)*j&)}^&R8c57vk^k>+#6kEF' );
define( 'LOGGED_IN_KEY',    '>5sPja_2Hd{C#hsgo1}a`q|VaFMkum1)g~bH$^B`MDMGw_?vu=}=iC@ffd2((:V4' );
define( 'NONCE_KEY',        'yKKB:%D)C.BT.+$Cd&qu)JgG^qcnSf=iq>t2[VDB1h2b6UwkJ5Mip]*Bn_] ]-9I' );
define( 'AUTH_SALT',        'GO-Yk;B6T[qJ(D:  1<R,7/1rGj_oiJ&d[My~A~AX1xc{El+j?JOv><p3_GdT7v#' );
define( 'SECURE_AUTH_SALT', 'c5<vRVrK;+Y#*3^B^)*`Bm3r >9REf|tu.a^!Fl)~Ir`#P$:RvV/#u_gA-tkm?T.' );
define( 'LOGGED_IN_SALT',   ']<3{.Zd>3M-m{j6f9+Mv</1.EyH3Sr5=XoaBE{~/, Jc{`K6&95*z|>|48Zow(fR' );
define( 'NONCE_SALT',       'AUeh#yW7-}g8[4A}T^}:29#X!jV_B!*z_cV_mUDG`r@#C08?CWsRp> n_}RfnQ)~' );

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
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/cnttepu/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
