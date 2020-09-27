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
define( 'DB_NAME', 'findparts' );

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
define( 'AUTH_KEY',         '229|`f=9]U{-|Gb)o-0p>&^nVkee9oIb4fp.B?g /d|)dmhd$L`ADdPT)ZvW:`:?' );
define( 'SECURE_AUTH_KEY',  '1r&yr&$VDMj01fRA$Wy!DNgiR!.5I?n>n~dA kt_Mz){RBw^R?mpt^=qN5/ss}+[' );
define( 'LOGGED_IN_KEY',    '+s.:EaOdQjEigW44m`[)@*0]4Z/Do6O@z5O[.7SR*|7{p R~>+@c5I<v2BV{?=0r' );
define( 'NONCE_KEY',        '|Fw`d0?loAi=:6=91wxPNO=uecnug;)t=/1yheoI ]iiftaffJ~ qct]bx*NJ#V.' );
define( 'AUTH_SALT',        'DtV+<0,GV$d[DwhF:j$tLaNL&JMW$v7~7.9%JoTJ)P+22b;vhD&VHMtJG&ysVZ9L' );
define( 'SECURE_AUTH_SALT', 'eEff7P&|Ic4xHfN7@$*Jz:Ej2L-;)y%*T;|tA-/V4#<K!l5LPMQ%m9ZYUNZ<O@fq' );
define( 'LOGGED_IN_SALT',   'WU&K!TTzjc-NgQ$&hqhc*dih>(wK>S>*!r=7)S+|ho]zg/=]/^{>dde@1?I_;f|b' );
define( 'NONCE_SALT',       '@VlJa/Bxxv.OHH1p}TW=2sKw/jpX2K2(0F:UVHW/}.drdcL~C},0E8]iI<#_bkpH' );

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
