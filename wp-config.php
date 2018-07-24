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
define('DB_NAME', 'khuntblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rta}L#?97,;,##X# lpO_N{.<55oGh=}7Y-Hk[@({IvCxQND[_N]ty[B9XYC^f1m');
define('SECURE_AUTH_KEY',  'bmQwHI^}Z E7)/E,T:wgCHnx@F#N<29.x@*hoO|a1YG<N8KBO[coNlDXa1y]U2G ');
define('LOGGED_IN_KEY',    'pyQ[X]V/5?pg.VT54e^S@?hlR!Q,L@vSeo{X+h5Vdat!;ik<6{aPGfhPdv=7-+}g');
define('NONCE_KEY',        '2%Rl-w}PP13Fr}19#g/~Z!n(1ue6SN~i0jQ!68=U Kk57Kw`6q_BuNuLqb]iYBFm');
define('AUTH_SALT',        'PbLec31h.FBi +EAToa@k[QbvGO43 *4D WBjRM}tIlDzP<H,/lm7g`S}K*m{,h]');
define('SECURE_AUTH_SALT', 'LPuz?%[PSFaM$nj+f!>1%_czFU!e*$q]Ii-.XaO88.$DRJ+If3MKR4ke`_Yr88s`');
define('LOGGED_IN_SALT',   '2x8lo5WnW7tB )!j@&(7 2B};8$IC5@q_jaGBVO|UNjgI{so3Sq1YO6|uI ,/+ii');
define('NONCE_SALT',       '< ?tCLZ|2B[0J;pEYT]WB!)_qA2Rp,L&+#g@q*=1.X6In=:42zA%w$&;@3<Lcf/C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
