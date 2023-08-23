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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '42_194_235_52' );

/** Database username */
define( 'DB_USER', '42_194_235_52' );

/** Database password */
define( 'DB_PASSWORD', 'eG7wYBt5LR2bEznL' );

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
define( 'AUTH_KEY',         '&6kgXcWzc:d*h+zN+Q(F& E{kl%yu*6tFU=rVosqR9NbEwx^(@8[)2<6=!SU5-.]' );
define( 'SECURE_AUTH_KEY',  '*XcjpxpI/IC1Z1/Ih &Z37:[t-gOH9^3|rmK[E=4Wi?.3yCxI?1U>(P:]v9}Qn,-' );
define( 'LOGGED_IN_KEY',    'p?{r6&~nLw %/-DaS>oObYT-fPnGctq@xLG{$twXD$UA6=LkxOxeHM+0 Paa7R.q' );
define( 'NONCE_KEY',        '7hlBWwVqsr7Sb=Bcub^]YTP+BCQ#g[>gr}{iq+R-!<!284?![pS0<Whk8Chsf]k+' );
define( 'AUTH_SALT',        '^/1,0Tjm:Sz>Lc},y[_1*aAH/-EB9)4>;Zk_En(1T&Q<A+uFo}hsq^K+tmf{DZOm' );
define( 'SECURE_AUTH_SALT', 'Wbwrrb[)]OVREr|o8~*c@[}o2+fj M.TPOaOQS^`-3.`8tth+pf/hh*&5`{x.Nd}' );
define( 'LOGGED_IN_SALT',   '=NL&d&a|2k=[j|7D]?9D3e_iP<B3rmNrw[xm%t/e*ulq1`+-13pEdJQvHs~i}Q};' );
define( 'NONCE_SALT',       'gQZi|Z;2X$JLnHBLcbXVNIX}cHKf9x?9)Gg{>Xz*hUIyCmITeLEo>r_GvX&c7]<!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rk_';

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
