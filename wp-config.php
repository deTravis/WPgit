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
define( 'DB_NAME', 'wpgit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Y=fdd3~(`{!k!vZH~3n^HkLE/3BU{n+{M*0Vw@Xj*+]Tl?rC.wY<FL1w|~S[p[B6' );
define( 'SECURE_AUTH_KEY',  '%B[x3acKvu@Qr5W7qiC$F!QcHN=Kiajb)<KSzOMu7rmAjXrxcB.xnf2Prp!,=?w|' );
define( 'LOGGED_IN_KEY',    '$ge6<!Ig0l&MJQ{>`1vE=h6h=}P{wGw{dcZF0NGdi)Y@CUIWK,:`A%H4Dg5-*z>}' );
define( 'NONCE_KEY',        '*0]#Gx[R(TNay.k|5w?a}u^GVp/SKN1D}0(pS<1HcM8_ridd,N[ m[Z=4;eFVPQl' );
define( 'AUTH_SALT',        'WwX9&Tx[k(a}i9P%q6plW[ASDGDGM@o,c!<0jdQLSHJHiuD6tX53cB7Gr^I*jg)w' );
define( 'SECURE_AUTH_SALT', 'bB F#,TX{l}XDQoN=KI&v~mOuHwo^qusj>5Xb>l1AAo_G^FD!%F@6M/[e!GIkpB@' );
define( 'LOGGED_IN_SALT',   'ywpRHN,w8uA>jeoPkF]Bc(4=ZqXz#2{yR9Qp!v#Nj]_7$ (]{z=S7l(=:uU@]RD{' );
define( 'NONCE_SALT',       'p0c+Xo,+6z^nD/S35/X3/f(Q$5dj%dgjM]1NTOmk1pTd/&CuUy+RO`|u1&V}c|k}' );

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
