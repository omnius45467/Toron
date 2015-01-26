<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'vagrant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'K-06}{:Y>h4Zkw3!$Pzo?->p672t3+8el?2tIXu>H&+(Cq#$NY*C7Tg=KV9!A8tK');
define('SECURE_AUTH_KEY',  'Yy|E(dP_ $E4gHUqQ!;R+Tnz;_ l_0j>LUGrApTRrdtNVy!jMe+D*us-`G.|,1Mc');
define('LOGGED_IN_KEY',    '0!7@CkQZ4`@M/z)#`{{~hT^|iPs<nt68&I,Quo9 D^w?`O6>HN/cw*b~RJQ]wM5h');
define('NONCE_KEY',        'gfCPJsoZZta}cI:]1>JUg3sVVr=-EHq` I4`T%;%Ga!WB>)V@`!LJ7nm[Je,AN!;');
define('AUTH_SALT',        '0D6@ =9Y3W1p/]#xSOi0Em0LqUnDa(q$G|!#z5SxP<k{8^Hi@CeSEPt4D~TG1B(L');
define('SECURE_AUTH_SALT', '])&D0&j*[3v}Q%:(Y$AAHqQ{9;>.0-{CFkq(].FT]u1&$`V_*>^LbH?O8P-TyDGH');
define('LOGGED_IN_SALT',   '`x1d3.%q->{dn!]fLbn}(5hoNbDI`(65z5oGxRK:8]Fl0P>F<3tP9>0M-LFim{X^');
define('NONCE_SALT',       '9=%5KS|5Hm{0,L[Pbu @%$9Fd@3e5Nyc{r(R6Yu..tSk8F n@[7^*>p3K~U@lR 6');

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
