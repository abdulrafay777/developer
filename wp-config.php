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
define( 'DB_NAME', 'developer' );

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
define( 'AUTH_KEY',         'J{9S3o#H-0Ue )E[u.G?<Q~r^Sq5-F($A+lzHUA4=&QH=K|@V6p??v.OVjV|fZB>' );
define( 'SECURE_AUTH_KEY',  ' M0N(56^u}sK^aRCPnGH[=.e>2K^0waf?S2)CmM*G]mM-cO?}HeHPEG4#4dc~5{N' );
define( 'LOGGED_IN_KEY',    '^_jRMZ@V|U?vDe=/p*KigVz3|19T*)hqkT#u|`?H[<yQ~f>Gu.| 7T-~_*1R85FY' );
define( 'NONCE_KEY',        'FwvXYShX[qwW0u=A5NRSV_&RFt]/c9EwPAHmaa1UlqkY!WZI%DY4EhrGWPsb1|n+' );
define( 'AUTH_SALT',        '19srt)s;x3|$FFYU7x@sdHw=/tzZ#C4F.hLv.z$MW^x[R[m3R[hs!%AumvEh=T;r' );
define( 'SECURE_AUTH_SALT', '2WDsgU;PHqsl^~UW0s5:DXc9A1KY0vsB{ONj?noiY(C,w0&$h]QUS;9S[KqVq(5w' );
define( 'LOGGED_IN_SALT',   '|@t*Po ouTbCb9>4wn6;vBbrhq(0OnQZ|0K7D~7TWLuj$@k(xWeLAU>dY.0a L;g' );
define( 'NONCE_SALT',       'Q9/lV#K<t,?gEKe5W(Mk+!Xr:?Frt-*)zzMIzXL,b@Y!5 DEf]+kU:pE>Ejn>s=X' );

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
