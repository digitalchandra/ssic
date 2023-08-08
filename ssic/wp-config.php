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
define( 'DB_NAME', 'ssic' );

/** Database username */
define( 'DB_USER', 'sic' );

/** Database password */
define( 'DB_PASSWORD', 'Cs@+_##**9849074014' );

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
define( 'AUTH_KEY',         'G;Gi$jZ2-$t!s@t^5>$y~Dx,l8,Q#a.z.&|#2H??$2effJ_s#M`I$x+Fvzgb|isU' );
define( 'SECURE_AUTH_KEY',  ')!=*P3_tS)Lnf}7&D#N<F(rn)+vN7:p)Z/sRFs(C0efE^+_ Fcl]4vDfn!g8f|&|' );
define( 'LOGGED_IN_KEY',    'hs@:/nwZ-_9~EBgMM&s,bLP<Dwv%4H8nU2 {/MF =9BI9KwiGH*O<-]`0;VBD%Ke' );
define( 'NONCE_KEY',        '6t(& ~JZ7$aF2}c|cPYJDCn^}9OHwZ,uS]-1jL-pUZaid;2cf7-Z5sp7/tQJ8k<J' );
define( 'AUTH_SALT',        'C/@v`o@AG}mS](aAOoTeahZ#l:1}<&sN)ClIw-ci`Yv!@e(>M{#i_]ua8%YQbs)Y' );
define( 'SECURE_AUTH_SALT', 'VlPujM|wO#Int~PGXs?1%7?FOi-RG}S&Fs hd9nebc,yLhZ:#_#X@D45.>~C|j5R' );
define( 'LOGGED_IN_SALT',   '~%a68SA0IzcQo]`hg?=&kmTrAL@]H5$#t:Gqy.PO~7 FIDejq<#IZf1vDj9 hzwk' );
define( 'NONCE_SALT',       'T0^f$Q|[[h|RPoliJ]LdN^ifla-Spqu_N*p!&fWQ^dt6l3&/MOrK?pFwMO?62:U`' );

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
