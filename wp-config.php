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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         'ea<;#PtUCb/UkQ!xOPRL~)HhDpK>~ha^XYEzdMWdpFpHMV+}Cazj^}9#;Ok-%-1g' );
define( 'SECURE_AUTH_KEY',  'ka4MagXm_z~zM+^$$t[=^K1SZ{Mx R;!(3S>mXckH4w.7}b>wPN88ah$6KLX&kVE' );
define( 'LOGGED_IN_KEY',    '!zr|YQ_@Wx;2r?|CDVw5|m&B#}H;7^RCr>EpD2,`%_!] +bS/caP2XbV#aok{7,;' );
define( 'NONCE_KEY',        ';z?ckdGdCx,d=*YI~~S%bz8,+[M`..#K<G>UJx~%P%ZDIo8I<.>-!2)oG$G<h3P)' );
define( 'AUTH_SALT',        '>a$q9&=&>0-4nG-jy%tk6k()_O/;YC((}KW_sa8s}.qbfc8`0s90LM3}i:E+8k1%' );
define( 'SECURE_AUTH_SALT', 'r5-#T#eF<S%o&RW7MJle9;};+w_^HCqhV :E_P>4z9qrw#%ot9n*GVF^]6s8<>70' );
define( 'LOGGED_IN_SALT',   'rJUv@^7jyAW^B>Qr{zdyRZ&R-M-nz1!N 1:/q3V l_h:#:dQZQ)>GBGSC{*6T[yd' );
define( 'NONCE_SALT',       '~D:6y? Vr3l!RSI?zwdXWWSMutosExX6B3P~~=?p|FBlm$I8Uph}oK52`&TMR0$V' );

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
