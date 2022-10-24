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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&3zOI=Z;b7C-Nx;=BP3$u75B)3axF`=uxYWuMe6,x$8Q26-)(O Zl(4eWa9G${++' );
define( 'SECURE_AUTH_KEY',  '|[sp$qo&lQ@VDU2AEo2m:PCREFovXT~(LSWyw/Dg&9 YL5E_,,gx9g3p@2pO)+V ' );
define( 'LOGGED_IN_KEY',    '*#Y~A*,^18 W*xY`<p)0P``12B*GID~$=w;u{YGM*OF/39Rc~@2[s4+&W>s-l}z!' );
define( 'NONCE_KEY',        'W]68G16k9l^+.IdWIh{GOE:74ytce1.I/B%H9yY*C>L/nVek}j}h`e:O8lb,,&W%' );
define( 'AUTH_SALT',        '_f*1Un.msP%j`/H4! )k7F=F;NEn0>R_KY`FSlf{<oamj o4WNV^J8l17/xfH!7w' );
define( 'SECURE_AUTH_SALT', 'F)hgerq7^i x1/fi^k3t0S?WBKKblu-khEUzNv{vFS~]kf$13z@h_|hBWEMP;vKo' );
define( 'LOGGED_IN_SALT',   'mpq<K3:$VJ*^U&@@YRTHG9,)70Ew(*M_VX%]1z3l]-r6]cR)Kb1PI!AUxt1,]UI<' );
define( 'NONCE_SALT',       '3lUsQ`H}bQyGz}Bn*>GT#/)h:iy:[mdpqa*]?TM7xD./d7OCeP}!i~=NOvAZ{FIi' );

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
// enable debugging
define( 'WP_DEBUG', true );

// log debug info
define('WP_DEBUG_LOG',true );

// display debug info
// define('WP_DEBUG_DISPLAY', false)

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';