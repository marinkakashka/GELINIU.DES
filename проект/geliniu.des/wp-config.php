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
define( 'DB_NAME', 'marinad' );

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
define( 'AUTH_KEY',         '/>Y+w;0Kr>Ph@6l0C$Jdyb(.#A@@O)%*Ygl?{g7$cIYj7y3p?>:*_mG*s6&U&zHb' );
define( 'SECURE_AUTH_KEY',  'W_VZjod%UZrh~gfPZk~<aYy,A-I$`X%Jpz#TmN^GZQPKkt9T{]Ib71-[dn6zN ?-' );
define( 'LOGGED_IN_KEY',    '  )}]*2sz-6-*/0P^CD5oX`g&rvH{ERp6+`4+>I9!@(}NA?x_e/:d2nOc)$_qLc ' );
define( 'NONCE_KEY',        'v,^Z#T>E.{3o,GKu6Up_]^nBSD+,Ro[7g{2*k`r]$OD3fBth$RVGU!`3@Np@HM< ' );
define( 'AUTH_SALT',        '|4)8r2#yNCVbvev4+0;9t.9GD6d-qWndQ]-qAhpsUm|]hqvFPxivNER4qgu,9Gz?' );
define( 'SECURE_AUTH_SALT', '?-IZPm(}ICB&^6cWASuNz*8HhWW-mWD m|_oG*1!z<lnoi q#@aly5+eYrPr7.*A' );
define( 'LOGGED_IN_SALT',   'uNG3KmS{3zq;oxjlU#GnV1|@&I/%RdBRx&YV|P}/jLL]Y5Sm|yS4 bA.jU[VF+%z' );
define( 'NONCE_SALT',       'Gdj>W8J07]oc@I0QN}tz A=W7;,zWJ%:z=QYQyw/+p:2^Am;y ZL>m5QH6y=*o~T' );

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
