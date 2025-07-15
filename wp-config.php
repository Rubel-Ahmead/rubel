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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Rubel' );

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
define( 'AUTH_KEY',         ']r#%.%rM:7x,M&8HQQ2gU>n`,%1J9$qJTXo<^Hq*k%:BO/<D./H 8UT4zNb5X:M=' );
define( 'SECURE_AUTH_KEY',  'k AL9<smnHnPUap~Q^Ymx(Clz4NbmNT@2amp#;u}4rz*ZEP)ahZ7%xST;mTcXceL' );
define( 'LOGGED_IN_KEY',    'a7;<r*0CS%uarJS@H~u#:K;nT}d #s]RBH-ot_LbB=}SJ]AwlA pTVgfG5hmDh*u' );
define( 'NONCE_KEY',        'qwpn-VdNWDZ;mI<#&(d*;@VnE{#pGy6A)L1V&`j)v7;xz;Js%mo|/HUFp~&`+QYF' );
define( 'AUTH_SALT',        'Z,|k;%feEQ,/hErb]AI^y8P_[V6+ZRT8}k~Grp~y}B5|g[XP_ps|CXyzSWL1Y.$&' );
define( 'SECURE_AUTH_SALT', '![?sv%NF&o:(~/},n.|$y!d&Qqk],JuBnD~SQQ[Q/O7>I$pW@moa;HS9WPMdhO83' );
define( 'LOGGED_IN_SALT',   '3rCPa;J/.IZ|fC52:74BgWP:Js]** B2sU$Ku~svBti;!-lo?4:9!Ef hqxS)g[}' );
define( 'NONCE_SALT',       'x*HEQVnM?6a7<jReWaY&^ML}M-r,98XHy)I8@(*/z^U/F:PRMT6l3i+]8(P^R.Zk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
