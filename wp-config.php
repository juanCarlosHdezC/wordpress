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
define( 'AUTH_KEY',         '`P)Q#!3;D~_B[tVfQu>Z{m=Skxz?]X&T7+ElaiJ=?)oEhW~o&(6qvtChe_UN-A5K' );
define( 'SECURE_AUTH_KEY',  'Jk9Fu2n2G}%wUN4rQiMS>Uin>pb!m;O@H;?lYHIYkZ<l] 3!Z=5]2o>Td2*k>Hn&' );
define( 'LOGGED_IN_KEY',    '5D4 Z11bs3GY3,5x7b~@OTKDR=k5D^$v|aWr0C*o]aw|b~w~rb#wXh|ikQsQ*(19' );
define( 'NONCE_KEY',        ' MN?MPF5782W(ao.o$2Z|DC=eT|ZJI|3Q18&cV.cl{j2sb1qq+Y#67MgI)w0-hF`' );
define( 'AUTH_SALT',        '&7/Wvet|HSPi?<gGY{Nm.%Q$i<p RiO9dXd[`vMA7;^jm$oM^Rk/gn^$nlcjf;b(' );
define( 'SECURE_AUTH_SALT', '!#6%T:eJ2$/8$B1(tX_X27S[P0{=.*PSD55]G3U~4sL]jx=[/@P$XcNv,J0e+&.w' );
define( 'LOGGED_IN_SALT',   'D*Qb$t!k)7G*xA,J4Y_qo$/HcpO.cvPC~aShaht.>%:gLwDxBaED0m?#zB}KM.wH' );
define( 'NONCE_SALT',       '`+KkB_:/N/-@^8F@vFbgfX$*eXQ}@HnrnWB&eOqT-_tfTU4`Au3YBVIzEw!:~R<N' );

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
