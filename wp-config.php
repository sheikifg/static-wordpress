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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'static-wordpress_db' );

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
define( 'AUTH_KEY',         'm|~RB$N1B5iM3C[P# yCu+-WX 8gA>+w&8HYM_M]]^U{Mx?qvLj@/;n}YEdk?#8S' );
define( 'SECURE_AUTH_KEY',  'zC)^d h`L!-(IH;:~fiNVi>FYBN?zlI8ty<|Vb:_aR. mHLMS2x31Q9JN=+)Ld3S' );
define( 'LOGGED_IN_KEY',    '/:Gjn$K%uZA&4rHXG|!rSs7zz3~0c!gZ~mnU2X-Q!2R7|c{}(^W0Br4AVKwyEpYO' );
define( 'NONCE_KEY',        ']Q7m8no4F{pY5uMIb;+f2;E^UjX^Q0!4|T[tM>is^O0P6}&W6^q+ zj)#xip~g6E' );
define( 'AUTH_SALT',        'BTO(ClLT0M7i`ahMjzlyhQ$>!_7G~AX.(<8Qb+E#A#*T}rHair5B@?t6|!:i}:N{' );
define( 'SECURE_AUTH_SALT', '[do2P:$lyoOik(np{0mz4hp15{Dqj:djj%hE@=i= w)B=e^+Qqa#7,r}>-iZ$ZH@' );
define( 'LOGGED_IN_SALT',   'wz}{H~L>VOHd>M:c0m4JK9c3:g~<O@[1A._1W>YjbC1WL@.df|EE3[81{V!*qjEd' );
define( 'NONCE_SALT',       '%H$RKhjuB3t*C&_n,U!6_ih_Ks*|&i[08qKIv;<0Z;nU+8TN)E>rT.VC0-@PcT$a' );

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
