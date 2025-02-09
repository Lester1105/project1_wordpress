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
define( 'DB_NAME', 'project1_wordpress_db' );

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
define( 'AUTH_KEY',         '>3M4Ttpw<#>T5HGJsmnCqn>/|50.Tia.0M/c2]PqoX}O;:aJkL0# Yvfe_Y?(v.8' );
define( 'SECURE_AUTH_KEY',  'L|]},hP)$8w>-/n_PR:I{Z0QG&H6RUalV>d+f5W<Juwij>x5ydH3CgPcJ_vxQUrW' );
define( 'LOGGED_IN_KEY',    '?ISNy`jqvOCc5&9f+$q;A$2zKMran]nvDBTaU{9 e1Se|U$?^.Xyg D8|feHiF,+' );
define( 'NONCE_KEY',        'Tdl-??uW&o[Wh#M>^66IJ[&!Ha7ef=Rm.{0dL})s{^5x-`Fk)O[}/r?9So#%>cx1' );
define( 'AUTH_SALT',        't ^!afzs])M`$JkccG~~oX2%H6b5E>e5L}36HVkYE0s>aj%{:YH;$R-IU#=2)t@C' );
define( 'SECURE_AUTH_SALT', 'Z-<vI BEWq-q{K*5AorW)az^xW&;|)6|<mC^HAkL0)Bnqku3_=SD8}FY|a$[+L-]' );
define( 'LOGGED_IN_SALT',   '{$My6,8y:SNp~9gZQNCm0xpc4PcZ8l ?x/>iaI/fJFTR62ry3urfj.VE^^(;V7q_' );
define( 'NONCE_SALT',       'Rd0DY[l]^MDRf%4&[*?)21]H8Tconz=DQ4-FWpEPP%;>Dn0dRv5%`?d~Cm4uOnD5' );

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
