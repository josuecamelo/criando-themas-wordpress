<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p0h7n5x2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_unicode_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(v6[1qCJ)mw9fU/5Y{<le<S|S:|+rLEP^kBW7+f-F],8;v];$+pG3,SO/Zqs`g{c' );
define( 'SECURE_AUTH_KEY',  'KFx}vb.bAq$]Xv8k=Z/Mn+&I#U8z)9/TAJ9t_:)y0XNa8X<nebR,YG;FD_yVaLsZ' );
define( 'LOGGED_IN_KEY',    '`m^:226w2EEE(_ANnlV&_j !z4p,0{M5GowdOCIJq/9]grf!l<K$U5A!;2_Va1x+' );
define( 'NONCE_KEY',        '<~&PY30QG<7suKsfZ_Gj)?/;{`rtTxrBXb`L}INzj+%(>DP4D+i)7_hUV[~3M.hR' );
define( 'AUTH_SALT',        'x{)=2:quTP|.n*dR!L49zcUr5Z1H6(|kn4?X}d?Wrr,P._Na@M,jP;]#8pDeMu}*' );
define( 'SECURE_AUTH_SALT', 'o^x#Tw02+u bI&!Nx4-,iv~|%lrl?jBM F}._t`g.lZ$Cye9Unxw6v6m-S]~]nLJ' );
define( 'LOGGED_IN_SALT',   'gT{n MRBOTm@{xA}oe)]tL`ev~wG^^,VLA8G+Rc|l[&W=cZbrg$!<^~;o+= K<2y' );
define( 'NONCE_SALT',       '9Rxl5/TaLA^;R4g7]qM:]jPf](0:AJY_Rt%Kolc1I=d,22.9iik+3;3.)qRVo6!:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
