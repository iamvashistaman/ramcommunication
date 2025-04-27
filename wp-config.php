<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ram_bandhu' );

/** Database username */
define( 'DB_USER', 'ram' );

/** Database password */
define( 'DB_PASSWORD', 'Ram@4923' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('WP_HOME', 'https://ramcommunication.com');
define('WP_SITEURL', 'https://ramcommunication.com');


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
define( 'AUTH_KEY',         '*cW0@JfCrFE+2Kk2?J<mX_MwY8!(P9bX9Ih%H99>VhRWF HH=G^,r@@vzRC$yY-Q' );
define( 'SECURE_AUTH_KEY',  '`W2ypa|#;|)PEXp8C|L;V]&z:*){i3;DPUteOs/C87}]?RFP$`:mI{{a>-<+F?N{' );
define( 'LOGGED_IN_KEY',    '4Ls{:*OCr<>iJm1s|+G/]z|1Loj`(=)4+3U3eR@{YvRgmhZKl$#A<zpob2Xs/*>y' );
define( 'NONCE_KEY',        '#IrEoQ+3G-<zv^EH3t?m6A8%m(_BHriEyVqzysb[Him-bFkP<OuHo4Iqi<}<eTI~' );
define( 'AUTH_SALT',        'P7B(Gv+G3(Pu ?Hi#U~%60w|[RCk/{Uff<W.=@}{{L+.rMhZS_ZdKN_3h[Q^Ly|q' );
define( 'SECURE_AUTH_SALT', 'GlNxTjh}ZdWM8o0G;Bdx9<I`R443^ykq1g@nCU^i}Ml .pfx/<J}]yb2>;>O!q-)' );
define( 'LOGGED_IN_SALT',   'AMUIB@gS>NV[[c7@aP}^R.yY#`?^<8*o-C#ZUY}O ?%C>|/`)=}0Z|1,|(4`%TTM' );
define( 'NONCE_SALT',       '04d?FgW(TAPz_*4i%5i6M_,2B=oA}o]b-0uIY[BT#nBYS`?B;;Q8Ix]X{iEc.f,{' );

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

