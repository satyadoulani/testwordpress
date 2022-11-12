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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'iP%*Fz@%hBc)mlZ/]8r@$DbOg4sY0?Gx.OoqQf5^9NXdM+D)l,ae3eS5S^grJ2nQ' );
define( 'SECURE_AUTH_KEY',  'b2.6#$#xit^Y]_>afwZ!ZzqT&IV>lunnhA{Hd|;P~Y#FC(l7R?4q1z#r:wDT>jm3' );
define( 'LOGGED_IN_KEY',    'Q3d?$@!P+3/NMu%MWaYshf|g-#&cPxr)U~gfFT-d$ct3hj-(1.K@%HZbHTC{ZHXu' );
define( 'NONCE_KEY',        'C`bvY8Q%nggon09bG)-L%mi{ymb=.c#VlCN&5QZ2ZjNLQd s/-u??hyN/{uNeY@;' );
define( 'AUTH_SALT',        'g~}M-s}A.J(=ZMyO-%9+!TGrQs:GOR512+d|@0m0q!S1+~JpZvpLK(SZ-KaMTQVw' );
define( 'SECURE_AUTH_SALT', 'vO,i$*2Bg6A?5g3|*3K6jl>U!}lvn>RpHj99n}qzPdOAb!EF{|(MQ{zCs10Q^OvP' );
define( 'LOGGED_IN_SALT',   'dv2Gi~mFEnR%wJ(r8Ka31L3;YrHC2mNTW!$t0B*1M!.gg;5>M`*,7ThACsY~X|4J' );
define( 'NONCE_SALT',       '[C{Fj28yP[7XF$(j>/[j:z.yBBjdxq)f_gy46&ZZz4H(2@WeDSvuxWLR!R4.Sf@n' );

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
require_once ABSPATH . 'wp-settings.php';
