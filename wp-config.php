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
define( 'DB_NAME', 'Exemple' );

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
define( 'AUTH_KEY',         'rao#tI~8M1bZeh1&Nu`R@L|#@h/ebJP=4e_erJ;y#j25vj;IvJpIevo<suC<2lf5' );
define( 'SECURE_AUTH_KEY',  't|J(+ece9uuTe8j0Iu:Pdi8Oc6,B-DO_F}T`4s;YnVhCdNBDdQ/+i+%ywCy!sk}K' );
define( 'LOGGED_IN_KEY',    '~kkc,AQkihqu-+E]u|YNzRYcrC(_5C$hvw0>%N{zsmOf2#>OMF83PN !rq71U>Qc' );
define( 'NONCE_KEY',        'j `cq$a?C,X`C[bc1/v&%81gf5bA/fhD4lmHi<)VZDs`MmF6N]>te*YaFcPh_M&T' );
define( 'AUTH_SALT',        'uw$(1p?C<f]Nbb/ t@1c]bjmY&TpnCjLk)mRLAL;`x.gycR;4(LB8KP.<$+n1Zu=' );
define( 'SECURE_AUTH_SALT', 'r>:tCxPDh(5U1T5h#)<8 u~;gPuOh Us=qgM$}KG>l0[r}h)SUpwEf;1v0%=69 +' );
define( 'LOGGED_IN_SALT',   'hDqaxrRh5{|T^6/Q1$rOgY}Rog*S/RFxG/Qi3|oJtI/N$M Nns29-D*AmAeP(bpX' );
define( 'NONCE_SALT',       'HbdBFz7:<4:%t4F=ACL1%<q-<NkaQov&q%Qh)k%dkI9q-G0v(q`h3ftd^&eR~^|>' );

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
