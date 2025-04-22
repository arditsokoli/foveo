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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foveo_wordpress' );

/** Database username */
define( 'DB_USER', 'foveo' );

/** Database password */
define( 'DB_PASSWORD', 'UsqRhXwzxjbRbf3' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
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
define( 'AUTH_KEY',          'J0)k*h-vA27aZdG8-B3sZ4/U}l1>X{,[#Lv+auN_ivkI:29|rsOwGBM(8.>K1C3U' );
define( 'SECURE_AUTH_KEY',   'is3iJ(/P?+DQg^`}4$tE?Xu/=5)8Q@a4wIE.Ua$JP##mKu>VFfZ}mrRb6Qoa Vd%' );
define( 'LOGGED_IN_KEY',     'O,aK9e<hPG.~MiX55 R)V_|9<C7N.v.fP]set#iL(X8;=7KDOL4<;z<*09C&rh8Z' );
define( 'NONCE_KEY',         '^UT16*Rdt4 uF:UWy](-XzPI<A$lixoL@aU.@7z0OaYi*GBA5k<|p4 O=b<Q-I6a' );
define( 'AUTH_SALT',         '0{En#~+v@&oQj,{T`@%~LN MxRQEos2FY?a48)nDv6ct# i.Fy,ZtE}cNG~PT];F' );
define( 'SECURE_AUTH_SALT',  '}CTTod~8FA8ZX,,t8sD;@8cB6OC~.LXbB*cNqpYV+}yeSsS-$}oqsEbWZ#cHhiku' );
define( 'LOGGED_IN_SALT',    'yAqt|dwmW]Cm%%5rKgiT|#zU,DW= eGiRZQXN=3v`ibGhT,xl#S=I&nT!5^^<ePu' );
define( 'NONCE_SALT',        'QpQB2iyDuH{6;; a`|G2zl<4l6zH,KOhrGt#2r41Ts1g/^R5|}8+f7=H%,(zI,j7' );
define( 'WP_CACHE_KEY_SALT', '|kN,ZAHK~egU(N9?#+%/BiLRZ[w?W7iVppBX(SmB9ZoM,h!!$I)h 9dyx*E!B0mr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
