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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'OCUk@g:y/0}v~ji6j]J/D4:CjOdi<*0L]=d;5{O f]R;{GxKwijPdU&&G9iuN@=6' );
define( 'SECURE_AUTH_KEY',  'W2-F*7[UGD=4cY=zm5SpeN[By?UYSf/Je)AlZ[N8e |0:n1j,x= s#[|%FT)<Mky' );
define( 'LOGGED_IN_KEY',    '(B:jS0&HtPoCtW8V3F!n;XB-x#0K*6-S$>w<T#:{/O1i&=nH`.l#2B0Bcl44eS!1' );
define( 'NONCE_KEY',        'e)qY{GX$oJKN]~w>LR`tW/t6%=zW:MkK;}(v$]qBA!_0)A*!M^H7M`k=IhGX4O:w' );
define( 'AUTH_SALT',        'Gok2Van$xeJbH,S,myUU;1}?xlAQ($G bM}d}=:vFd$>_oC>&~`D$(`>1]WUUr=5' );
define( 'SECURE_AUTH_SALT', '?m&T=AS*&?G|e<CBy7WgL3B](=%Uof#Fq{N1&Vcag>At[7jh6bfkQ{|`!ftN$v6J' );
define( 'LOGGED_IN_SALT',   '?fH]OV@y<$cGw$FM>H_Asc13_5!@XYG<8VJ,i[Eag4(BwQ/vervQH4=&J:Nt=&sX' );
define( 'NONCE_SALT',       '$WU?Pn5cPc3Nc6,v8sL]I.|]0LCg%!/AJy!z(*>DLrfD()#>+v}W->8+)#BbN,_2' );

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

