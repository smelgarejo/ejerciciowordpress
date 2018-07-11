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
define('DB_NAME', 'wordpress_01');

/** MySQL database username */
define('DB_USER', 'user_01');

/** MySQL database password */
define('DB_PASSWORD', 'IC4TG974Waj5xX6P');

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
define('AUTH_KEY',         '45_59;pAJFl?3f7s~EI)1%ZvP~&Itk5JJ]=6[UNz*.h1OK@D;Q<61DFBg?VIl7Uv');
define('SECURE_AUTH_KEY',  ':1R?N}^,#v8B8[Z|E#2U7I=;C3$cJA~([xiTs,1Fr!H8_w60.4?.k*i@by2 7?r(');
define('LOGGED_IN_KEY',    '{Ax;0Mh9A-CpI7#3tgdfa[y)`}l+4Flq.j.5AM]]LJ4*;jXCmpbNRl?;<af+fWDb');
define('NONCE_KEY',        '3_Cl~WRu[OvY~oMV@p4!3!q<]gRFq~P5993[[I`+$C-/+aTj3-1G+UCe4cZ#Flyf');
define('AUTH_SALT',        '{jy>(P``t_fW!@F!{GLOHNZ2L}fjlpNN=mg6Qogz!-%>tvkXA h2-;?(J}Ms-GNo');
define('SECURE_AUTH_SALT', '6o.pUh,}&)Adn9TCJ-!S,h?{#t$R~501I|;r^=j7cET3N-@?nQ!Dp 5fm5Yl_|u.');
define('LOGGED_IN_SALT',   'J r;n{X(Fjf<1SBnD5{:cWAxZhv3Ow#E;lB_q;LrEu(w]*lUsj<Zv)a k:-nv.|*');
define('NONCE_SALT',       'f2b7}8eU![EOJ?qVy.L{LQ3a~ne-2);u{62ic6>B-uV)$&x #>(u*.#M71 lk<tm');

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
