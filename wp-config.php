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
define( 'AUTH_KEY',         '<r0h?lA*%c9)//Wd5r=%mX#;F.;8M.ZQNXt zZa`<p Rl(-h[6wM7#[WRM6_)@~N' );
define( 'SECURE_AUTH_KEY',  '>@+y W4,H*,k6RCLj/uiS9gd To$+vP|^]6w~TKL,KR<2<ry8GX-0ti(n+%;a#wR' );
define( 'LOGGED_IN_KEY',    'oBu(gD<b+*XYM7(ZQ^yyo-7,G  W}(bt7x<dLAAu4,3V;NM@$F[.VC$_J-c]cvQe' );
define( 'NONCE_KEY',        '+c+a72!(fmd?F@g<4jMvP?~!w1E>1|<,w+0*>x!XT?.$_uxGiH#o_?%~_9Tk|MB1' );
define( 'AUTH_SALT',        'e>5#z8x&-/41_zV 32 )TCmW4v@jF0:W|&RVpFy7$KuQQVcqeqs8_}BzC!e!+~[P' );
define( 'SECURE_AUTH_SALT', 'zH!;h1rQbiJtfPn1u4*H6SK8.A%pQ^rdmPwCM<!=XLb 2.>e>xz_#PEP}hP%?C^(' );
define( 'LOGGED_IN_SALT',   'vrdq]<c*]jztF/GREcu!qFKU[($k{+%H%-66ou)emrI_BgV!,2H<_,z)C4f03*);' );
define( 'NONCE_SALT',       'SDS6025p1ahG=5{e;U8^Ni8:ZVHE4Mq.@rNn;FWhdjKF~5RH,O8L:V.^SHUDPF]S' );

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
