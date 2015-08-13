<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'h2ecodrive-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'iVjU!j<NZERI(LQA3LjLIs.Pa1@HG%$I4B$C0gZv@nH}iY~[s35G+i1Q?#yc,}x^');
define('SECURE_AUTH_KEY',  '~%h1qEBaJdE[xh|T?[A,):#cu:EqN7My4WF7r0K~OWH^%J2iv/a;N~m.<>FD8mHM');
define('LOGGED_IN_KEY',    '$dBc<`WwCk1g#1o=IDu3F2-xp|gfE!<ZV~ 3-T8vnQR=gFy?}k7NKYR+9Xhq(u?s');
define('NONCE_KEY',        'Pz-]UrjI%=2%V:u$`ctm6:x#^N<tdy*c={gZ*D6XEcnWp+L}asraD/QgP02YswST');
define('AUTH_SALT',        '/@d(gbN/ehwF~./2cVw;ID#3M S8!%,YAhuu/GO(VKIy|9l4|%[:ay9Pas;s*VT?');
define('SECURE_AUTH_SALT', 'cSu<M8>t%F$ZhIL4G2CJwD0SYCOYG7Y}(Y4n4UH?hQ-Zd|^k-i&_[Iu{IjI_qGPV');
define('LOGGED_IN_SALT',   'JC3#VYOtRE&PeEe|m ,:uOEqu<G6>#zS4_g(I874D/mRElC*uCsxg]y]/8C@=z_R');
define('NONCE_SALT',       'EOHWNae4PQ6:<=$+rsE>{;V!N]`{i}*Pnn)uuv($<[*a;siVE:<7f/Oq2$Im=Jzr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
