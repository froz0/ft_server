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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_site' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<F.N=&k_0sTlnZp;IG%w0o$gQ%&^a9WTgf0cw.53ACZV;#sSfh@;U}XB&Kw`rvu ' );
define( 'SECURE_AUTH_KEY',  ' Z1*I$]DyCQhke.~.UN.hW?%Tn65UC&OF9Dm%=ee(8Dl?4Y*]H$L/Ej#GG_>^q4[' );
define( 'LOGGED_IN_KEY',    ',^]A[-i W/YIW[+q-4F<5B@am/7*W~1%v^oymY0.:yNBxc9|#,N{0R_0`KdZBKE8' );
define( 'NONCE_KEY',        'N8UxD=MN.]8`vBH=!#RRVzoc&,P.!l{L&.Ty<rVfJE<PB`be1sRVNT0-2biKv.}d' );
define( 'AUTH_SALT',        '`-q.c>I3*_Cs#Gi0OhUl>K=Xg.M7Tjta{!0@/6j&?1Ht(/C&db{;>}^$NfC~kN7i' );
define( 'SECURE_AUTH_SALT', 'oj][sP8S8ap1yFs&6F<Hs7cvw<~.YC-[j~%b*h!W#67n,Gp|.X#tPRtwVzk$sPWU' );
define( 'LOGGED_IN_SALT',   '!EG19<gKubW3T}Xz;~Z?iehviX-IYgnCgKcA#!P1iS-S>mZ_@U_V}?wNWGhN[7]0' );
define( 'NONCE_SALT',       'KdDy50j;ib;Wo>P#9@X0sic)DK-85bY#,47}sx[M>li7t;*MN-/MFpiM5Vo*>Giv' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
