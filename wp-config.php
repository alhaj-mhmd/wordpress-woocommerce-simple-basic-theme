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
define( 'DB_NAME', 'wp_woo_simple' );

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
define( 'AUTH_KEY',         ';Yc(#:1gwp=@ uB=1j}u[u+i2zAk3=#GN*@Vr-]xS]94hHD-9VCRE<+-%%< ?jcp' );
define( 'SECURE_AUTH_KEY',  'PN!F^#Fz4;PdM5@/5H+u*b`qeo%TFFnk@9Nv}@fID1bDq|r-H#XSFlZ=,F9;;;0l' );
define( 'LOGGED_IN_KEY',    'n}5@%Y$UZ`qwp~oOpHon@uF-U?$JV4Rn2LR33Aeeq-uVT3ncOMyA:{+S2_PO0Gm=' );
define( 'NONCE_KEY',        'Y9QU5N{waJY.d<Yr8>H?* +-nKw2S(`)E&P,9&zmT[ase:?@BBE^#8.y=!ZirJ)0' );
define( 'AUTH_SALT',        'F[M!!Hb>Mt_RU8wk6VwinXVs@2/ WMol[VAQ!Qg~~:I 5~zDx^3wn(V_OX,l89(j' );
define( 'SECURE_AUTH_SALT', 'yXq@afKU_x9Mh2fvq!3)p:.WRzA(G2URDxN#LPEJKv!C/pvO(?Q~^?_i}p`Av,iD' );
define( 'LOGGED_IN_SALT',   'gNAz=UPFU$LEldS:B*!/Cgc 82l7?He,A>).WAAjq$Wx9|F5$aG9{BDOvb;Cg5&N' );
define( 'NONCE_SALT',       'Cs$QY{wwg:v:^}B%wm4is61_b3)!]l&vhDzsg_ve1pa9h|~m8fest)%jO;H_]SW,' );

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
