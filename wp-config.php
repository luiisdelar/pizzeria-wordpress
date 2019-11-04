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
define( 'DB_NAME', 'pizzeria' );

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
define( 'AUTH_KEY',         'n78z{qjS)Di{hde@]/]5!f2Wfh);fFA>Md<8Y!VP2}yG{q)i}-}k+i(u]EmdP@Re' );
define( 'SECURE_AUTH_KEY',  '_{rkk}`~;7<[VN,&,|n%8| .Cfa22L(fZ=k4?72FOb&v:l;_N(:>%o3qE68K|+xU' );
define( 'LOGGED_IN_KEY',    'N[$X47*H{Di~@}=<KzvU5t^_s/hwCBbkGIpBDVOoE-=HX^pBa,jEob,aC9v9Dk/i' );
define( 'NONCE_KEY',        'DRiq`;kt?)E>5Rn7984zg:j!V:i!p:_ dh~J(7h^u:h{LYL2ybQ-5>Ef>#Iw{q)W' );
define( 'AUTH_SALT',        'W@0]D>xs?b29p7HnBD3Gwn4{UPibgKQh 94k;x8Dal$!CD}|>T?&B~aB`?rKx5M[' );
define( 'SECURE_AUTH_SALT', '5scL8b;bY;&>z ?ytAyfQru&3M#oNx^*$v(&H8)+Pxlmlf<uWXtnmew)o85i1^J7' );
define( 'LOGGED_IN_SALT',   '? Ew@>|vd1JHt$^{%+^ ,r)5(s,6%->p#OM)Js%~|iPkj/T!cHi%9|2aHHd?yj3A' );
define( 'NONCE_SALT',       'P[+@9=FF2f.$0!CS|bRb~yhqxc:[cdE@dRI?gC<a(9d l<9H|8vi]|` ~x;lLDcw' );

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

