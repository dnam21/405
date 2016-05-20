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
define('DB_NAME', 'final');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'RZ/A+YB_BdeN2wc!pqzf`8}i<0D.:[2[q_}Yh[21B6yI*/2F^}4[1jjSlI WM<#i');
define('SECURE_AUTH_KEY',  '*}-[/7-&6ln,E04oY~Y|;5A-7qXk,+9j{5g7Bq|1<u[We.veN80XHU>WK>A(Ff/*');
define('LOGGED_IN_KEY',    'AJ=DfaMW^m-=p,p8z/1JgQRq:c%DNfJ:Sj~Mw;W]$ViuKBjE!{|18<L3k?F(N|*-');
define('NONCE_KEY',        '(KnpP6:jQ7u(/<yQZigD-9=dmS60qiN_[rsS{psM5Jd<^+tuhB}QLfH-vHK!=Acd');
define('AUTH_SALT',        'W3AHZV/-,-47lTv+,BB1a+Kpf)Q}V[~d+>ARh -cw=c| Hl]Nnmq6f>%y/bOA}K!');
define('SECURE_AUTH_SALT', '?:[IKiJ:]]+48b^t8cLzUb*L3FjzN)A`055(unMI`q+$,rFw/Hd(DK1r-|(JQPHL');
define('LOGGED_IN_SALT',   'zjZYuuQ(agOact=xSG$%*%zCW|7-P8!wE#iPf+?|2t*GL=A1;*Eq#L}6_~,$YTPM');
define('NONCE_SALT',       'T20%riq.WX#eYE=<PXl0CIJ%hl(%=|fT`V&*x8G*Y8ik{F~[u{H. pqXkNiN{mHH');

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
