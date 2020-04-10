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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')8eQr?$:`C39Z6V>^68e;hL.7f+H79Cry.!8vZf!{K^lTRt3H9%-xaZKh)lS=.j-' );
define( 'SECURE_AUTH_KEY',   'H<SJup6Z_0bQgE~.1k~c}^Sd)*[dl30f]d~@YChqw9H$IA6n<U@Rfst7{2X3r3_U' );
define( 'LOGGED_IN_KEY',     '#+WwqEaWt%$-V{i5~KQy5K3]VZhEW~_T/utq[R*]&q%BC{7:EG3`sb9Lw8wWZRgB' );
define( 'NONCE_KEY',         'r_w{k -O[&YGR&5cI-9*xQRi:lifL }(.1#qc[Sqt8Oa_V7,mLB-rP|#Gbk9aRpq' );
define( 'AUTH_SALT',         'wS>=0UUM))JX+3t /o48`Y%,M0@OE8@`Lwr(sDr8`qL}{lC{qx>1_AwBp8{7{/%:' );
define( 'SECURE_AUTH_SALT',  ' srl2bX-VGRrX)<d0j9Bfm=xVciQES0/E7SM,:>{vW&o=*kK5Io+JKZxtql|5uu,' );
define( 'LOGGED_IN_SALT',    'T>MtoKpTl%ZcQu2oHMI+!*ogy.H9n|2i@R[3kvz,BUpbF-keZu4})Zgz+XI0S1 I' );
define( 'NONCE_SALT',        'bP}i~G$# (2zoP=0E8EqT;o@@mUEY 7kWqr?7Lnzc~DKHPRK5}4|p5$7tSitKZ_Z' );
define( 'WP_CACHE_KEY_SALT', 'dLDg}ZJ2,kqu+Ku|d*RF=/A FixR[S2$}mqrB|]c,wP37&{rr%1 !%(k$&w]1u_i' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zuboraz_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
