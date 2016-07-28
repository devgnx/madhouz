<?php
/**
 * WP Config
 *
 * User: 'admin'
 * Password: '!Nbz@Q9%Wl2yKTwI$q'
 * Email: 'dev.andregnx@gmail.com'
 */


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
define('DB_NAME', 'madhouz');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$Oz,2=sqI5c[}4-r8ds vG1IGL(AIB`}e{Yd-`i(4A#iM@;=(HWd+HhM |?=CtX,');
define('SECURE_AUTH_KEY',  '7TpK_4)L`yf5mrt6*8Iuwp%`Y3m02pCo}d[?(,8m_v5mAXo^5^EkcJ%g1.j)ynrC');
define('LOGGED_IN_KEY',    '@n5S>}^8N%$W&:6oW6t.RYHU%HA5I,i_D(qc!f7p>Z$~pJ &.D`COds9Ux7Ku{=x');
define('NONCE_KEY',        'D3Kd20oroe^F3B5T=0-xsgfFSl,=u,~0Ht/UOh|EvcyS-Y*@)6Aq$g mO`,$`qz8');
define('AUTH_SALT',        '@aY3~C51^IriSd-<P4K;}f!AX$-<Iwa6YctdP>Ae$1gqcA.(~b|!Ltk_VRj+]YV|');
define('SECURE_AUTH_SALT', 'FJq|LWQ(|]7{4k_ajg,893f;J>Y$<|-cGzG}-&+9W-x~?A-@A%6?>9tn<#*SDkX$');
define('LOGGED_IN_SALT',   'XVs|#1%tyr|Eh^uY]_I%7`8y!q:+ CeoW<[lPol_t-z7r-:3i8qbcOiC2yu:N1j6');
define('NONCE_SALT',       '#NZ|U;{j}`vv@we1X;qS@DD%rT[$YsCE#v*Nxd(;3cyB{O7a%i,|+foURYj8CpJ{');

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
