<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ';.X+7qYH69AGH%lVLzpDF]a{y8pPvskq(U]rbkr/<V?Cib!PJ?|]yeEXl`92vCRL');
define('SECURE_AUTH_KEY',  ')3veZ 6N_kcqE5e5j$MEn:;JEWa<4}bTswE|:*FalL1.W4+mhtFM)g/j+QmAO!Ea');
define('LOGGED_IN_KEY',    'taMC+r./Z.:DgFQZTV^L DVZFSYb5W=I-U,mLx|>!j2/&z_XAY/LOAk`G_^cM!!X');
define('NONCE_KEY',        '>Sg2]2D-^b(06Y5#Rm1XqSaf> D}t!CGry?+*lC9jF)%yjbF~. ]CoL|v?i&fY^9');
define('AUTH_SALT',        ',7Pd<6P7(d0AHzXEhm&.v?ct#wCF`-3{4#{Ise<XB/{(Soun9+KQW6Z/|<e:dn|<');
define('SECURE_AUTH_SALT', 'Q_R W$yDUvRe0Eg.&mk^X]+:yB[.gBk/@ai=jAvhM!3>#fL#/pH!3TjC&_3PZPmI');
define('LOGGED_IN_SALT',   'yrbyG%kz=ck{:CsBUR_#<q.|^t3n@P(-29^5ud]nq{*_KC<l, #.Mx|i$(zXj?Kv');
define('NONCE_SALT',       '$#p<TE_bhI4}_? oh@^qKs3-.QRV,.pa+2b5;z_vT(Q|Ei7A<%oL+<54zsS@R$(H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
