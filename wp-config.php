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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parfume' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '4E6Yk~f8wx~;NYXd@}6f@T0>/]>&V_p|q!.y3.Bnil_wf>VU<Nb2c{33kN^sr<2b' );
define( 'SECURE_AUTH_KEY',  '3RyXyUh2.,,vv+V.Aer5S#:Aur5B9LP3t+(,o! ||uxAx`7XotWSV[>*#WOz*=*y' );
define( 'LOGGED_IN_KEY',    'a6uV~a^=Fn1McBa|~T_5i/K@b^<H]NEBsR|d-w P3M6?f[0qCrpEq;C6>Z]r(&|7' );
define( 'NONCE_KEY',        '2i|M`1Z^!AhM1R7#xJlaWZ};wUF>oRdZJi0_D9U.xi=~9Ry0$a{Ae)PjrJOrBsLk' );
define( 'AUTH_SALT',        'qj9bWY#bW7Wtthkt#yx&Itvo]+zZ2Tax)qYtvkue!s[i?UdgU%,.7F-}wQrN]`Av' );
define( 'SECURE_AUTH_SALT', 'z<l?!g<*a*,p[wlGb5hf6V+#_^{ibR6AbWrUyAoTpKH)Yx|+aJRz<kV0(v>U|L%+' );
define( 'LOGGED_IN_SALT',   'HoMEUzZTmr[Gy.P3Y TcCfIt:(=3&$dui=:iW*L:9u=mkCW73@7QUKD>@0@ PsK=' );
define( 'NONCE_SALT',       ':v9Z!Pb9%)0kE}9Lwbt<|atA6w(W,ap%&P=r{X2?:~~f~1aR{#{e$skoSCwr-Clw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
