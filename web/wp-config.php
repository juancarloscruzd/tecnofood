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
define('DB_NAME', 'tecnofod');

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
define('AUTH_KEY',         '8t9ZU-|H07/=_eU8xi+WO85SO+{Ch_o.O+azh/] |9ho5e]U<jQlk)kC r|oKB$9');
define('SECURE_AUTH_KEY',  'H`;k~Nch`q-?yWeX#iQTa b`?60no1x=%Q0QCg<sZ6f+yrdTOw?.qLEHE#pEP.7w');
define('LOGGED_IN_KEY',    'o-qxk}!+]yg{144?T,^|Y1+bZ-gndfSK/|@7R-XKz!o}vg.?c-1RLO3]bHDpJ$Yg');
define('NONCE_KEY',        'f-JaF(>aW`7i.Rht=%gd7gd5>bNQqEYrWu5og9L[)@%cArr<//D{[[-5|]?=OX(-');
define('AUTH_SALT',        '-z)hvC;+y+yoJm_.dV$=E*%~)cxb!UoZ9GpGwS%G1:@36|Z_Q;I:$D6XkRH!px`Y');
define('SECURE_AUTH_SALT', 'uzhk-Pco:=-Ba6&rj_8qqbGs=`E]<TxyR-kiJ n`O4Ux~$_Gq Lo5iW_K+].X9v^');
define('LOGGED_IN_SALT',   '1Y~yb9J)AYY;(CxS}G|4n9Lb8|-9sm/_+9mm>]I ]Sh3BXXfV<:`23}:/>Z}^J4=');
define('NONCE_SALT',       '%bREy4Nf#U@Y&RH~zP!SMY+@+Ir(pOgX8zg!H{:Z3AoHSFS|8+B|4SE< 5eIpocb');

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
