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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitio1_wordpress' );

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
define( 'AUTH_KEY',         '_UjW#*!SQ8ezn&mxY%tA,?nkvkp`RVY2ay-MAafdE+zyBo4?clU{L7(%&DB-O1n9' );
define( 'SECURE_AUTH_KEY',  ':Ga fJDvMI{#=6;j.4T]QUn+<^`,j*tX@RU8-@_uu}62VSx|<.b#|M:aOXdC[m$N' );
define( 'LOGGED_IN_KEY',    '$erVD.D9ghR+=x*h&x=`agjFu,0R0>8bHN$+A%cTajx`|ar$$)X1x4o}mkxe}P|M' );
define( 'NONCE_KEY',        'Rh&X=,2<XmGP$6=^Y.=L(;{$=3~Q+#Txh/,C]O&hZc=JqDw]7mHx5E|WK63b@!zu' );
define( 'AUTH_SALT',        'z`yx8@csiNWzu9gZXjzvo`XT&xvON0fern.|RP;Q}M:Rcg}GKH0e99z;GEd2FpL6' );
define( 'SECURE_AUTH_SALT', 'dG4s}*^Q]lg|s|dY@X/&WLd9cE-X]s;mA;q|`stj];MPRmWkV~:LRnU_<mUZo3=7' );
define( 'LOGGED_IN_SALT',   '>=2<O5N(xG~ZU<B3-|vz2Tzr;v^7:~M5YZwes{!F<VL0~CjSFJ?~L[c_SMdY.V0:' );
define( 'NONCE_SALT',       'qmYsXV[v:(oT2MN:4e}( ;p8|zB#Vjp;{j8mZtOpKkUT*f=$7~bdTd&j^y*1[OD!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
