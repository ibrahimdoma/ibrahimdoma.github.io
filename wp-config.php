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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ibrahimdoma_db' );

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
define( 'AUTH_KEY',         'P#b2xv;b?.wD(ZCj<jfQWBU/k)P;|p;cArB`aP[*&re! MY%:$3UM3C2B+nh.ex9' );
define( 'SECURE_AUTH_KEY',  'VH5x6wrX[n<&9dtkT$f0]E.>)q+UDFV6Vu4y^#qqNE*v@Yq6.8YUcaQ2p_-A&yl&' );
define( 'LOGGED_IN_KEY',    '^lODfXw{|*pIJ|!T/X+Th5&a9-At/F4D!TiY=&jBo-~a,Dh4Wr|,Y*L8QigkM3`b' );
define( 'NONCE_KEY',        'OYAd!=Hmm g)2N#@?h==6f#Qn0q9j,[-MX1X%_vrtfN9*$l)j$r6]9]zkX{93{yP' );
define( 'AUTH_SALT',        'GA6CifT4H1FnF)726NT&ykXD_gDCv*;(7G5|)?+|c2{?KhEnE%*pXC;t(tgqtFO_' );
define( 'SECURE_AUTH_SALT', 'p-!Ryl5}RV,ko^Wtam<g(U[PIGVUeI%.En@S$CN(_iN>J:[(.vfB#.r|%wCz]c?%' );
define( 'LOGGED_IN_SALT',   '4+*)*OXH<$2VQ|`vAGGJhCv$x3tQxGJV@ulM1ZL1nxP.f0xuJ>^-q&S7F?iNZF2g' );
define( 'NONCE_SALT',       'ly5z/tTV9qOY>RMXILO>V<{Ixmi0vS_xhEYXcq)#y|8aG}/5]$68)}]W z]]~Q+:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
