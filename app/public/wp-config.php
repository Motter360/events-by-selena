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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k!Pq1}ZXtZ%S16SA,~Q}!$(RX?K/? xin~H|~/pZ*PPfY32[w1:hM|+[nO~>rOFc' );
define( 'SECURE_AUTH_KEY',   ' X$@$)BR:PfXm@iWX#HZR@j-hwyOyIY3IFU:[YMGS~?i$OOg]nXIMz^HPN?A9Jc<' );
define( 'LOGGED_IN_KEY',     'jkw//.{C9zG} KIjBFwRD]U@ytK[%<5Cf@s&/.lvuk vW3])bVLL@Zn16gZ-0!*,' );
define( 'NONCE_KEY',         'ywLj5Ba,k+X%OV;uhEUO=o;eljal#42DXTlwX@x*3yt,hp!Y`&<=<uuE+^g{xN*f' );
define( 'AUTH_SALT',         'I~BU0/lwi(;~m;ri;%,|z}U}xUtE$ijvw(%)JGmR L16FZyrJo`I>S`/WW&mz%d:' );
define( 'SECURE_AUTH_SALT',  'B?8T9Os@g06`X6nP2v&?>{,S`VyJTZ)7.qWCaO6HZ6michPB }v7%@szM#9_#T0a' );
define( 'LOGGED_IN_SALT',    'X~yfEGb fDKa3|oR(!Sob_a,w%}JE@gO;Z]Ss|!^Xo)A7Lp:[+-~ArA)p#CpGvov' );
define( 'NONCE_SALT',        '..lghH4`{LDA HAVqjg5R]Cq& 9X&zu~g@b+UQ.rJBbMlWfbll6F1qj9+E*XB62(' );
define( 'WP_CACHE_KEY_SALT', ']/})Ei. (:KyEEnWA!L*>_I|C&9 MO.<q5:OwmOCS;L#Y`by*rMC_R|>v8#E4k8>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
