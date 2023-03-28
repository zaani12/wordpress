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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         '(6[BHf0,7n(EZ]4H=##9}j=nbg=wR&OwNiC,9--F0JgX0metV E<S/}tEz~Hd=d]' );
define( 'SECURE_AUTH_KEY',  ' O<%?QxL%9-;6WcXXQ{YrO:Vt|(f^Z9x&z.pqm@$b*(~@X9a8]O_(uFVYJIy.<|^' );
define( 'LOGGED_IN_KEY',    '~;K.WI?1qNniATy=.Sv+V4zf_KtqI =U,a5$!%:NFd>=ZzUgN/=AO U}J21V~I/-' );
define( 'NONCE_KEY',        'znx^e35w;q]Y3g8?fkt-#6#B_[2CMy;Wevz&{okHRSY+Y967e0_)SUk^v#aCH=H`' );
define( 'AUTH_SALT',        '*,f6kd)oh#?&Z=x~0|fI-=f4]|8ukeOw-Dyv%KI<F`Hug5#,&Qu wm8gp83gCX29' );
define( 'SECURE_AUTH_SALT', '<5|ms>^{vWYP4ouRA+w.E(MZNx>zOi0n6;KU6699jcltniYjX=YmeODik_QrC{T/' );
define( 'LOGGED_IN_SALT',   'exe1giXI^XE|J;<ABUUGkgiO}m|tcS[1wPtfl+y$?U(X040IbS`CDQO, sEqD5r`' );
define( 'NONCE_SALT',       'Dqa `[Gu8UuMqRv9ii]Fx2WMH(reyKcmWY~U{o~`GKN}S2%V`~`<x9=(DwH>dkAx' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
