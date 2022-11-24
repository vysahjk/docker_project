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
define( 'DB_NAME', 'nextcloud' );

/** Database username */
define( 'DB_USER', 'nextcloud' );

/** Database password */
define( 'DB_PASSWORD', 'toto' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'Lq0m>0j=~|S,sd0/(i)%4_Q(qZDT>t75V,netT%B`2eN>h(m_nUT`&6SI0K`)2Sj' );
define( 'SECURE_AUTH_KEY',  '7s6z%%@gI @>[CGfl:K?+3XIJxK(!ISdPdtsW-}5uU2iL!T_@Yhm*c!yQ8qk{vjU' );
define( 'LOGGED_IN_KEY',    'k}HKXX949BdM-<.KO=LmFln5G !s^eC5I1YgfGN%hl4ok&.%nH;qc4?*#wAlp3l?' );
define( 'NONCE_KEY',        '?V8p0y^ Q,{lP*>NAN*x1P_(oKdcmd@L,d_y <x(6Mh)l{B!dFeh[S8dcs^qF>3x' );
define( 'AUTH_SALT',        '=1~<]$KD^#`ic;[}n]oY[[_B=Hl|.nyF7JI9^xr%1XM}S0nGWuDN9c)2,MU@3^cH' );
define( 'SECURE_AUTH_SALT', '<Aiu8ScSSjFhaXTaSvoQz#-:mpM;QPJ64kDdT}-$0Mz b3p@:>m&IP?ppS E>W>%' );
define( 'LOGGED_IN_SALT',   '}MJ4qz.~LSQUk<& I%ya-(SyU6SRE$hKRcfgzdq]~!=.;V#,|]`|ac]|?UIV)d;1' );
define( 'NONCE_SALT',       'nNVe^;P7-NB:t+`JaropGQ,c=o}>whG;^Q5bC(0/f@H5VYHX+MaE3:Ocj*Z_EQse' );

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
