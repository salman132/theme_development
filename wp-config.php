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
define( 'DB_NAME', 'personal_dev' );

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
define( 'AUTH_KEY',         ']eLo1Ds(v g+`;rT_8)x@r5Y9uTWe+&n@qM7bzh^xmYG`}NmuXn?F.M)lO]>[XhB' );
define( 'SECURE_AUTH_KEY',  '~*CR15qy0El/xz)@KdWc2:#7xDyK&J{)*ySEVu$q9 D|.TMs8e+x;+Q(Az|dLpWT' );
define( 'LOGGED_IN_KEY',    'yf:&TEHj!ky?{(mQ}<S&-n!E_?a1F{5O13N.iyrraAupqKwJR<Snr*NM<Wvb_Z3E' );
define( 'NONCE_KEY',        'rCqD/j!;!%CCY(K>E,|VpFa@61,/9jo=0x9bXzPaP:D6a7b0PWS~f4@C9WmV4x#{' );
define( 'AUTH_SALT',        '+u5YKPlxq0~1OM(3j59|yO.xvikOvu&PUCp[nHIbB)2,tnjB=iJX8@tBP~;.2JF0' );
define( 'SECURE_AUTH_SALT', '-Rj04r6xHCKDL0N Nw$-E.(`h^LoNL}6/@**Hl4cz5a9$j=7t~!?X=FG$MZG(ZE0' );
define( 'LOGGED_IN_SALT',   '=y{{9yP5;&x2z!CHf0;r`j*NZwZ6&u9r(*DvK[hJ~$@in&`%HP9roewH-zvM[38o' );
define( 'NONCE_SALT',       '=bAMKK<*<ub4VY$9iE#MG,tn&{D?;o`[fa-W~7[=exhnYPAP4wmW~l,`bykg;6uV' );

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
