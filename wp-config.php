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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l~Eg)T6iwB$yT|ZmJx1`Zd!,Xcjkr=k=V.xWM .qP5IgN42pNw7M9YB~TZS/Q.1w' );
define( 'SECURE_AUTH_KEY',  'D=)Ga`t_Q>7pl;M/?Ds.HVjLT%(fqUm3{-cbrqp$Ct_lM.F:Y6v;i1:Q(NN~jHJ{' );
define( 'LOGGED_IN_KEY',    'omaSV70D|[-L~u<r@xbJdP18Y_SjS8qP;9q wEA8ep<+@Hk[9pPn*@=p8Emk)_zW' );
define( 'NONCE_KEY',        '~j/Q{b_:wh_<F/!agy3EV.TI3L7~%!lGN;p8?CXeoN`cB{5(mRUe8`$lb;)}nYI{' );
define( 'AUTH_SALT',        'JAfa&c8SnQ:[Ias6~~d}!F(7ziZF%vd+^yDd&{GQgt0K{0dt%,lXH12+<-)TB{`z' );
define( 'SECURE_AUTH_SALT', ',fbM4,l6~BbgHH}i_gp:TH5z%*EuG!@X$^r%VuYNnd`b0?;KE`cP^I|e#M)ot~W#' );
define( 'LOGGED_IN_SALT',   '!6a*%Th,.<`wao&:B=I/UXcv)E{<z8cM75R10D-yirbT8.Ar>$z75Z~?|ouUcs@l' );
define( 'NONCE_SALT',       ',d}ky?g5.q3czoL`OM4iBNYLd(}Wri^#.hJnd/<(t +h_^lo[tB-@Ue(yR/9}Snx' );

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
