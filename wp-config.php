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
define('DB_NAME', 'bootstrap-to-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZQklr!Ts]iH#4So$ZPm6?N6b@8Jc[h7N~.S&ZWn3`pfUlk6zEWk_^^I}C:QVA04(');
define('SECURE_AUTH_KEY',  '36Z`OwS>?$8|M^pyj;xNN>nIul<DieCV%?f<Bi*okV*l^Pq^Np03U}0,!;1XbezS');
define('LOGGED_IN_KEY',    '%2ek8I&VMOB(i:(R*AV^?hn1|3%}~5f!yw<b;Eh*f1T4}NVGF3VUX@MDe5s{`ZpI');
define('NONCE_KEY',        ';XeE?d,zqhuCb#hC-Q#d,G3@RUgmM0Ii}r^hxrq25^?0w#;K]+OL^u*9hj7tiiz)');
define('AUTH_SALT',        'wn*ZwkJby,lP@<8xCZ4xr$EKxaBmRrdY3b2_`{gvh@5zN]%t49UKzB#fLG-b{=l)');
define('SECURE_AUTH_SALT', '/2)zP(<%2q5Rq`G~I4F-T@lGM;X(oT;&,TLkkE<(w#le_:1[(z$-A^H5kj8yb5Oq');
define('LOGGED_IN_SALT',   '?AbM_`*9SC|[:Q!:tx@M=zj)TFUyHKmSU!5k,1XpbV&Hn%j3#4X[AoYoMq}i#Vjj');
define('NONCE_SALT',       '#4w6(w5xnue[b+su+h&-6XKNaE;9[9jaI]KU>rk|]MYe%_(awUoT[5V?aedx[A%w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
