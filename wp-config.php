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
define( 'DB_NAME', 'soovi_wp' );

/** MySQL database username */
define( 'DB_USER', 'soovi_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'soovi_admin' );

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
define( 'AUTH_KEY',         'wFzbI+RupOs!i$aP4G7NnNgoP>:H!!q<ce),y,B|vL@[>Ow^Se`2K+puV%?BLeTc' );
define( 'SECURE_AUTH_KEY',  'y0{#@~,(/pZB0?6@7Aaz~-5?ykKe1|-(z%Y3QQ$7SgOh|i4+YS5<r8-Ili<X@]M[' );
define( 'LOGGED_IN_KEY',    '-v$0!y2_Yu2W3+J&NNi8rwz@DjJ@+%7?^PDb=5UCRrk)bAZ73#+ -Zm_Q4>^:,[d' );
define( 'NONCE_KEY',        'V@t8A&B=NRu_cMKygV$YWh<V3a#vcgL0m~uj]jOzlXFP/|{:Zz@r;WRoR)#LIMo*' );
define( 'AUTH_SALT',        '?(|}[02Jae@qpi!%4T6DE|m}<_,$Qr2FKE|<b/Rb|9U~%Ex#Gz9$d-~/EKj;ccah' );
define( 'SECURE_AUTH_SALT', 'mN(u]?mP1P)VycecU.q`Rep;R.4F-1ZVJ/4(zh_jv7I%;a 5i.x|D;CZG08g~=jF' );
define( 'LOGGED_IN_SALT',   ',3{[.,_RXQB$qpV<vlRAm=iGplP|zs72im1?k^Ho3QB7?gAU!V?!x7muz^<TjLx<' );
define( 'NONCE_SALT',       'pA)ExKXJwcewr*68#h^75X>LNfSb%`c7SdybUv]cs&/:zMzfA=;g44kJ-i60U+l.' );

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
