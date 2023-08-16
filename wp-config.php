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
define( 'DB_NAME', 'test-task' );

/** Database username */
define( 'DB_USER', 'test-task' );

/** Database password */
define( 'DB_PASSWORD', '+Mw6]cJDoxlO' );

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
define( 'AUTH_KEY',         'bMc4[4!ml!oMz(<xGY-H~#033<P=Ow#2;]Aq$%B6^^+b[BU7w::oNS4M<{z1e*uw' );
define( 'SECURE_AUTH_KEY',  '?gb;Y_~p8Fes~Ummt`S[1&O5#Xh-wRmaF0LVm(-ex>.|~[Q0Y6r(#Jsp<M@LW1)=' );
define( 'LOGGED_IN_KEY',    '2`2w/?NbU89=5Hn.t17R9& vfX!XMeA;6@]`2eUY$I4z*.d2]&^=PGY!Z6]v/nH&' );
define( 'NONCE_KEY',        'nnQ;xDG@@s)va>LtQ[}]!h7NFbmnI@D@NLDeprG31xkT`YQilv9%h*B([Tf?UEe0' );
define( 'AUTH_SALT',        '][&4W@nI8l{I^uNnLyv0:a2*&-7Vu12^P/Fe0@ce2Xs5|lZ)h9IpF*BTNz+h5huU' );
define( 'SECURE_AUTH_SALT', 'Q=7z~GZqv>@vC|t-Cc#%Eka,8td( *-5hzPPGiMWpb.xf}N9iwfB:Ea7.*j.6)Y=' );
define( 'LOGGED_IN_SALT',   'k*|BkBLV`$u{1Wh`*UC!LpAPZfI=@Vdg.ZC6pHL<fF{_Fs>$m8!9b?m`c^<;|<pF' );
define( 'NONCE_SALT',       'e(%3[M{-`L@aBefrM8;-IX|G,9Pr}sR.CQVL4[M2g+F-3YJhk<5(A($2e1<Dz>,S' );

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
