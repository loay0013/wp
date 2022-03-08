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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/>xXH~Fz|+(~: .AcD05z9&0fID3~4C&SPjG3dNNeqmMS6,, E1[=I[lzkKCwO=)' );
define( 'SECURE_AUTH_KEY',  'zfZ`=|#wd5bbdco0T*%4I:$Lob:q%[W~?)?#IZ1._{4CW-+mCdge/aJxY8Ns*L<J' );
define( 'LOGGED_IN_KEY',    '4TybaSji`|,lS=<J;D1)F-gcCC3HVRCj(9X{Edd0^2[U]D0j{4tDpujCn9K=A&G&' );
define( 'NONCE_KEY',        '=/.=p7BKxujJ<R&(e)J,F Zu:_n^}oeT{kW1i(29B}HDPi#vWmU>{;_~,0_$q,1+' );
define( 'AUTH_SALT',        '$&*NC9Vi`Z%DzDn$1MksV&G&(xM5L%+_F6q/fAo}DbmYa9Z=4d%h%9 8 hBYT*=~' );
define( 'SECURE_AUTH_SALT', '*>c<fq3a^quqO?gmjz7XcXH1HP/#ulz]i=.b]~aL$rh`5ADqJ /JMd]R~`9$T9P=' );
define( 'LOGGED_IN_SALT',   'jk<8arL&@<~H:4$c7,9PuRrKmI))J:jW2-T~*1B$ oKrC+:zf|9h%YcCT7NDc*#;' );
define( 'NONCE_SALT',       'S<To6v-@ayyf}+p$/9,7^mne+6];-WR=wL7bd3yzeHV=l9 zm(t5(;fH8&4s0at2' );

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
