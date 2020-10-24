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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Lf-Xooq65&Gaz_t OE=^BvC:_tc`[*d(}r+]MwS|FB}8=#0K?t`BU%1z#Ac^/wq/' );
define( 'SECURE_AUTH_KEY',  ')VjnYT#=dYibyDBfx%95V/Lp&Lt!@m R~UsP!).+ZSZ [rzbP]my!gD#]J1h>!jl' );
define( 'LOGGED_IN_KEY',    'vTJ0QnjP;^e9):a9L4PDpR1lGrjrH_Qh?0<5fWPNy<MC1(DRkyRnv/sE@;JKfC>Y' );
define( 'NONCE_KEY',        '<m)pm<IS$hXFS$Kj] N8=_/|57V}GJA@2P4dR[>1_]VYRkrS)CB5dIjw7J^S_I6u' );
define( 'AUTH_SALT',        '1[S01=0#dkb=6W1H&N]TU.^vA7i/]`o|QK`ay!f{jq0RMX0piRMh>fSP.i}i 0PT' );
define( 'SECURE_AUTH_SALT', '!=|K0.`[(0G{c_>4OFl[uBb!|,$op #h9J#Y=Ty@IAxutd:?2v|vi-960D@K?1L`' );
define( 'LOGGED_IN_SALT',   '>THKXKYL;:3PiFLj9N&<-6->_8`5z^wzgbWNK:DLcgd=x>SsEn4fk=8/4#V(qvVu' );
define( 'NONCE_SALT',       'UPk48.uEsp{@S%XM;LsR}@8ChsB6&t{_bIW}eRc`yx~Q3$EgjRQq !<Y@sk.!;V.' );

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
