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
define('DB_NAME', 'wordPress-plugin-development-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Njfcat2543@');

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
define('AUTH_KEY',         '/u)WHHdfth+,EK^kYKjt$EfQyu!(U/8[P~$/U{Yd%Wp[9|Y U>(GSjr0|YK+3mUn');
define('SECURE_AUTH_KEY',  '$^N;vT=s2,|8>UpP9$r4[Sc$Zp-7v-ip:]N95@@R_[i>Yju[a&RWW?!EuM{NK0LW');
define('LOGGED_IN_KEY',    'A.F_Rqn%U,R qt^pRgCA.+XAq0Z?pYGDmZ.f(@0n77Af}W0<TGD.!Y>_vC`SK|e=');
define('NONCE_KEY',        '`&7)F!(d1y3QUTc M1>>z/x&[}Z~uO)O9]=ZG15HLOp;vG]*>!T`R7.}I7Lq.Y6#');
define('AUTH_SALT',        '9ESONx4*pe-76EfMs=5hj@lpEK.{u3TE8]qZL7gU2Ct%Hk&u|PDD117Up(->B[H,');
define('SECURE_AUTH_SALT', '@UAZna/2|uUq&Fd<sg/z$D 9/[qYTKihZYk|IY&_TZXLc$V>Lu#7WpoGn-qU>d*:');
define('LOGGED_IN_SALT',   '|@u#R#q/G/I5.I-><wx9A77u@#@HYkAh2aOct6JjR.5*HbLhYXAJ=psS-<PHaCIz');
define('NONCE_SALT',       'KwB%>],[a4v^}EEF~KkMFW`-<?XY7Kq$zBLhd,4p;Kwjr,dJ###>qS]Z1VbS4+>;');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
