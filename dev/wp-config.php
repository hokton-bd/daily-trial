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
define( 'DB_NAME', 'dev' );

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
define( 'AUTH_KEY',         '5|}-=hw=Z*X}[yO;zQR|=eI*kbGeF6R&`ZlDPCo0tp0@1;mGK88,%R#Wm-EjJ*|i' );
define( 'SECURE_AUTH_KEY',  '^d82* 8mJa$HKn?*ws5d,S{XciEzjB(df70^CFEa!D*a^v*RC>]TqZ1LK(z41t!t' );
define( 'LOGGED_IN_KEY',    'E%y;y# P `xl~OXAm<ck!?;bAxk7?h61]6prk@cpj,%+}$ ;hN/8PJ=w}Tib[8=.' );
define( 'NONCE_KEY',        '_g[f_?Pz*w0)bj2zm?c?&;.W)9YE-kYP|N]aR=lVG>*-q$H6 -tT@/S&;InK@:>r' );
define( 'AUTH_SALT',        ' y}!E9IpU<srL*> [C.}QIP~C[Fk@(Hyqb;Pb>BuJb#Xf=Y@ZNOy?rG5jpPW=rTB' );
define( 'SECURE_AUTH_SALT', '6*DyHW c}$fGsU|0qen!{aRHOb~1`:2;[i*6p:|^JaZq&2O=D<&@}s[{EKcN/-rK' );
define( 'LOGGED_IN_SALT',   'Zw$1H@vv+W4IIq7^F9^C;b%cyhk!$.wX)Sc`X}}t Z..#)fH9F1q6dcKn yw.SN&' );
define( 'NONCE_SALT',       '_bf[q(m[vE&g.kGC>4R 1&/VD|,52PAw3]E:Gyoe/ eNsrPDQ=TR6z?dQ ;w9ep,' );

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
