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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '@mpIGfot|fRha38Z8Yo ~W8($fbL6a(Umd)SJ/g;+UhR,gWaii/ZO`Un6y7^id1H');
define('SECURE_AUTH_KEY',  'L!MA`U/:lgmz``>.)1>O<,g@:55&hq9@oi@pvoN2xE{}h[]xazE^oZ0i3_nRr}Uu');
define('LOGGED_IN_KEY',    '3<<i>{Nz|g:PID;7K>Ee`!To)#`_X(USQ*b9q+DOCtgPu QP9u>m_!J{Yb[p.l<6');
define('NONCE_KEY',        '@9,p[ht0C95i8<3^(mSRpeqRsDEc+3qR~M@d.[=z>x#Og8x-z@)[YM![aiQtY,!<');
define('AUTH_SALT',        'kBcmNipgf1/k#~}WV5$PN0Z^1?nwWFkP9t|zS>NG`2I,C$7q-CC 76wdin>n7R}4');
define('SECURE_AUTH_SALT', 't|@ Apr&B @/F,$g3+*[m730fUA(/m2WbwA_7sTckE/$u&]v)>7v,#+y+:?b+}#W');
define('LOGGED_IN_SALT',   ' ]MN&L90Y7Q;u(2$R,j#}[?2RO#era%0_tTOQl:i IxiImzf4t8z`/VPEwD`ie;/');
define('NONCE_SALT',       '=r&xcABi69k504AVL`]K0^vamG1FlA4(;1ffDYZB #~x2T><ycz-JFEbz&hd(W< ');

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
