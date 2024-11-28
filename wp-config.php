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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'child-hood_udemy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{y~wX/_!]p$WaI,y;guhZ^6frc<:3[!Y/Z(>%OyuWNZGOk/AKKbH+%=CAu;giU6U' );
define( 'SECURE_AUTH_KEY',  'i`M;&:rw5Ca6%r#D`{z(:uyUIS7a8Wy@2&qLFsW*%{ChTr)Z$%!=+{;B@<#OP&*u' );
define( 'LOGGED_IN_KEY',    'K.lb9Htqf;o6(;{~2fs@RN6 7``s`Zg2%^1ol[-31F8lL~1u$j/;.}rs#tLv57nc' );
define( 'NONCE_KEY',        'l;^|R`>@X](Y?CusA-J@xRjeF[.B?zU*r-YB11UP]|I8TfsLn ~l[lb4Pyi{2C$9' );
define( 'AUTH_SALT',        'f,:Vsc9Q5Pqy$L%ZoO{OXeqP&ZQ6Gys-2~i-.@(ll2C ;DY5w6)ji^h4trlqYjy-' );
define( 'SECURE_AUTH_SALT', 'QYRCkv5!$Bp4rYsJbg/caAr6s2Xo~3Ds4he&C-27}Q{R`g)!EPASw,{z(sV4-tkR' );
define( 'LOGGED_IN_SALT',   'P4$1L2dCzTf-Ofv!%)Ecu H2ediWb]lj,>&+avVEHo~Z5BSxW3skeonQDF4mL%}/' );
define( 'NONCE_SALT',       '6awndHl{x|]N-cpBGpeqdbZ)Dk+>cC4sx4JRvS_;K=y H(Mt,Hy@;q8[J3<o)kK0' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


