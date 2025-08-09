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
define( 'DB_NAME', 'steaks' );

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
define( 'AUTH_KEY',         '[A):_MXoC3w1t AY)06cjbgRKZ+TS^wgmcPDf`tq$4Zj*jJkd]s~0)#Q%0z@ubF=' );
define( 'SECURE_AUTH_KEY',  'g;x(*mD>TNK3;}/*sHI=tYeqCVRtfs*R`9[kbwkBq)T;W/ere$,vaMOB*NLwo%mQ' );
define( 'LOGGED_IN_KEY',    '`{*W(6+N7v[<qbn`Ex/AHAdMV(aOo&GxbEbZyeo*0*sA&G?b8zHqKjYD69Lf N?h' );
define( 'NONCE_KEY',        ';uA8m-vyH;5+iB:5sNg:)?K&Af5,Wr+wUObJkUiO#>rh / ?8_V-*yCGa+J]Ku=-' );
define( 'AUTH_SALT',        '+y]0zg6)1x&7Ys%~f#6UOu o~yf|+%SnxsWx2qSkU9coHu$+F>P7A_}H.6Ygi &x' );
define( 'SECURE_AUTH_SALT', '}mN~j0FF=0S%aT5L2H*j$F[^L}1 Aw^G@fe?=[,SpGHjINdt>WJRL=*U,[=h[SM{' );
define( 'LOGGED_IN_SALT',   'fws=|K!NSu/9];oo`*a Dpn?{vh/W-1Ema%7]WNWZdnz%^rpiabvzCYTr$_T1He&' );
define( 'NONCE_SALT',       'b6M]i.lf{s0b]S6!-%G 7R)d=$-m7k]Y8;<i)5Ukk)WwT#5k^K.(ZMo(e>[e<&?d' );

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
