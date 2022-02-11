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
define('DB_NAME', 'tienda_wp');

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
define('AUTH_KEY',         'r_<I&-BKAZo<0j$9xggXH*>@{`oA;$2J$L;z1m;HN6#_.a/`I-lG7.qraxJjFA17');
define('SECURE_AUTH_KEY',  '!ZY5LvQ5;KgE7=*WV>X}={].)ZmmyVI><y4+Ve%T?5<OUR0;=U>)!iXmMwlgd;.l');
define('LOGGED_IN_KEY',    ':dTT;V-FclrMj0=0ZPw(a92ayc^S>QAC>dB@,_M_L&>mk.uoW.:m8Tm:DL/[Ru+g');
define('NONCE_KEY',        'LKuR3Vf*;s_fkfYI;.dP834=U`^IRE0R7>}@[<*AFRtcVjF[l}[z$4o<BmHA$2+7');
define('AUTH_SALT',        '5bt6sdbi$lV2l #sV~qs%x=_*!s)Z*)baYbkhqW8`f5<7{9LuS1:*H-I _#1_$0E');
define('SECURE_AUTH_SALT', ']@6%I_*upr2pLZkfanazn[Biarer&|F$NMU(`F0n|lj[27;1X;19&xCXCVK?P]sP');
define('LOGGED_IN_SALT',   '&c&q+3`Ja$Ln}p@).tPDYkkkzR<lxF^4)d[d0:BGWh_+{H+#_$($iBpE$J4KZ::#');
define('NONCE_SALT',       'M.Fm(HjDe9)Y+P&}8QImHW)Ub`>=yL7LSwTQtR>:&[MwQPr;0uLt!o2I5sJT6&Dd');

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
