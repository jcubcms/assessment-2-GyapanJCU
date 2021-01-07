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
define( 'DB_NAME', 'u3a' );

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
define( 'AUTH_KEY',         'Q~ql=7AyYI+;pZxJxsgtNB0mtuA^I|/~[UM_~FNdjL*nkmj%{LpBSy<0`N% QT[r' );
define( 'SECURE_AUTH_KEY',  '20Dy^egD4Id%)B{f`#u{`.E9_<DDtogm*wGkkj2Cy}R&tKJd1qV+Mmcp/)=Sb&%/' );
define( 'LOGGED_IN_KEY',    'y;$1?8[U4Sf#jQ[.pOkI_0$KTa_&g.Mc/k:)vsXc^wi- eE axV85`2$z9K/NrQ=' );
define( 'NONCE_KEY',        'Ri99(4X9;|FtqN[yaK~Y;2z;&tsZ^SMLY/wI=P{ TfP,y,+m}b`H_$*E7 +VR%OO' );
define( 'AUTH_SALT',        'J<z%*[2:FH#!YK+Khk%J)UGj>0/7dSd)v.;Bg IFG}@8=1meyC?R1J@j=2.ey:3?' );
define( 'SECURE_AUTH_SALT', '%A/<{E$Y#(K&wcZZn(jDV88:VSqy+CBCnHE2N1jOw@h/^&@`PW52 Ae,elAJ46rr' );
define( 'LOGGED_IN_SALT',   ':v`Rkpw+)Y#S3Q/d6^m}cB(5e2ROV=X4`W1.K*H]{z}_ab2r#05w})a%J]$yU$>C' );
define( 'NONCE_SALT',       '03KW8tU[rMm4]1_xOR^7lXSq2*l9:1<R%T=!VoNr9G;5w*7q$C}B5seXTaxCo$K;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
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
