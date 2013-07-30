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
define('DB_NAME', 'staar');

/** MySQL database username */
define('DB_USER', 'staar');

/** MySQL database password */
define('DB_PASSWORD', 'staar');

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
define('AUTH_KEY',         'L6&ofR3cvE4e+-+jJ)L2nZle}|^2<gs,||8tS XQL)G{3zz%Qc@UOl*[$-?f4:N!');
define('SECURE_AUTH_KEY',  'qK4O8+YUtycnL8-Ka)mAy|(5a+Ol]<:(C|6Aqu%H{,(XlM,G13Z~XE|LMd!RV6t&');
define('LOGGED_IN_KEY',    '1kLdRtgr@J0H1a@7Rd`fk_QpPS4#H9w/.:3Lgcn>G|Q?tMD|k@plsn|<pnoN}#!E');
define('NONCE_KEY',        '}$WRsGX`Or3E<miqh1az(R/<?$>?}2;|vg>!8*f+w$c6QW ,%n_L;Op~|wk4EaN7');
define('AUTH_SALT',        '~Bhs<kuF+_3/G91O9.<nc!/]C9,,~5$N#+PVo+W|:hi)ysP)J-DRWo)f_wDIF/O$');
define('SECURE_AUTH_SALT', 'JYm :+|-??WB~el^|`7Pr^jZ_5=e:)> gTnPk;6C|pTks&^wIOb/f+C23*eJYjP{');
define('LOGGED_IN_SALT',   '?w=6x_Sfy/ ,r^6n%lL92lD2L),L?0^XVHTV;MHfa|5M/Rc|)(3iq!Z`c8f=_Tg8');
define('NONCE_SALT',       'cX+.365SR6-*MHUC}xr[SH/aS-7?X%|9hLRP7[QdcLF](EG^Xr{BsJdC,)-zHiy-');

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

