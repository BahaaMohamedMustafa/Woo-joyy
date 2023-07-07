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
define( 'DB_NAME', "lot" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '<oG1sw>vRig?u1&uvl/kuWlKOZYC}fFpYwIG{o#>?c=9$|YeE#Ika-,tu~W]4E(f' );
define( 'SECURE_AUTH_KEY',  'v)6Jd$wC!.dBl,i%j!(ahshhzoPCkU=-P>w.PfHCjHu:!lWmZJ(sC4l ~fJ[U{FH' );
define( 'LOGGED_IN_KEY',    'fiz3GJC7s9xgM/CJs; s4V|_FA6~OfNKU<,r>U?FARzwC-DBVO7nH_{%TZ.we^0(' );
define( 'NONCE_KEY',        'mN(L3elHiVw.#^lzS3O60b[ *&G8ag)^oG:#4/8HGe<mzm[qOO%zRxo(Hh_JGtBA' );
define( 'AUTH_SALT',        'QJWC$!hqPRLUtjP{mUy/}g2{T0r9,t)}%9]IUf2|a.!A1yLh[Hw_uBKUYvCNvn2S' );
define( 'SECURE_AUTH_SALT', 'E{L1Ri1`:BTiWc*;fN<E]}js{t9j,TbIygLxTT9MGqovqqB<$AZr$R12SSJM2Y+x' );
define( 'LOGGED_IN_SALT',   '*2/e RbFeRR;RJR<22K+Usi6-#VyUVdDzPu>W|qR&! ^$]}.f+fAl:hFZvrB!FH)' );
define( 'NONCE_SALT',       'i@?[1e.@fYGUs<dI~}eK4_!+tnU}7;H.-m-+TE&cv6u!!e+6twyt|P&O%JHN(**j' );

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



define( 'WP_SITEURL', 'http://localhost/lot/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
