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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';Sq8)-/%{YN@RJahL[tOJ57>.L?q3,>Grj53gSvSy(%dRXu7l.d`^B-9_N=8.c[r' );
define( 'SECURE_AUTH_KEY',  'jl0HA=>/o&lg-,[QR=h~Pl,TBs7mrz-B|IeW@LtBNRP^2;}G`]{s|?VpQvRe6X?T' );
define( 'LOGGED_IN_KEY',    '4PMLgrR#W7n6f^m4qJq,j*xKoXL?SG5MzsIs.mw$bwgz`Q#zzjDKY|Wb7@ovrr$q' );
define( 'NONCE_KEY',        '[?QM!s;vyrN`p( oEc=w{2%rSNF5vo2<{6N_Bn)k!<f~w]QIW([EVNXwn[mVfD+j' );
define( 'AUTH_SALT',        'm g8yX7D[Y0S@$8#BB#:;NugDAw{mn.h=lw+yA,9>Fv&M+7BS)=jeNd}:2}YS#LK' );
define( 'SECURE_AUTH_SALT', '|M/uL6XyS5yL$gerKRQ_c+x++~>.1K)8{;y;aJ_>:YBKH!~u}}DafaO`pqHY537O' );
define( 'LOGGED_IN_SALT',   'V/-LA&d^qWp$FfDw@(KM-(uLG=(`:irE!guA]+t6][>G0u/K(kDVWp>SE4kY+jTb' );
define( 'NONCE_SALT',       'Mt a+ 2SEyBDSS|,F|RlaLlFzj#7E9qljZ2S!W)m`CW CN[o)0h0*aaYr$U/PCEg' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
