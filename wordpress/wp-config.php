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
define( 'DB_NAME', 'class' );

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
define( 'AUTH_KEY',         'ISQ*zw0Eh>>f/,wZX4p]9Uf-P-` q-TX_DXb>6@]r34V DG.I^SU])KaIXsC8q}p' );
define( 'SECURE_AUTH_KEY',  ']fgn@0]OV|)*n{r5U/n=?V3~i x.EC{-%m*U*9<E2sp/To+P-AW`}@Yo]~kCaFk1' );
define( 'LOGGED_IN_KEY',    '~-v5}]FTI]k!/o/`,2BRBv:R!w)wyqdARX0-tao!jk@lBV+m|K HR_By 07{Q;Ki' );
define( 'NONCE_KEY',        'R/l#0#a=2ZMwwd@^:q|*n9t]oPHRn,OdcPJ}EZpmU`Uev*Y.x{RSng8n8W{?I(pW' );
define( 'AUTH_SALT',        '`+]Iy?x&IaO:7N!M%S7MA#NcNZglaRB9d3A%_O *Dzw(YzV8<14FmJ nt>)4*j[/' );
define( 'SECURE_AUTH_SALT', 'JN90C=hJjNl`QB|vMJ[/vpUkehv/.CffQ{S5qpwr%ybb<(Lz3Pp{0J5m(qhA?iIt' );
define( 'LOGGED_IN_SALT',   'OKO|HDWNH;#Id&81tRF7}(2HSF1#x8.xh]{K>T`2u@QgNO]>wx}GNW?a-nhk<,nK' );
define( 'NONCE_SALT',       'rgXxD I2i{E</K{Yw;.RkeSyCMW!?A;ne]N`Fx$CLF&2G1Q,`-cnP;fM4#PFEix+' );

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
