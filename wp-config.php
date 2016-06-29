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
define('DB_NAME', 'carrot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'op+ UUsO+&r`L{7E3[%-I=LS(e9y)OBl?@QY}Pno&z,044@./_a.&G<0UxgBG^U}');
define('SECURE_AUTH_KEY',  'O2Htd(rMB<t=5RuQq~&#0z#J.IT)p@vH;yA_`hd.0U+9XtS `R8#dEuo>W,zpCix');
define('LOGGED_IN_KEY',    'jl/*E4<TnumYdq{t,QYZmMXKEC~Pk}3@mC^fa /3U=0Vh1M-VaNcG|5dW<_18!m^');
define('NONCE_KEY',        '2^Gz1c%O1~IYc!V-9~edv(]@T%~hjfX8r|tio=F/t/70x6s5,=o,)hCs&.eGdWQ1');
define('AUTH_SALT',        'hYiO6nyWibgEo0b:tjOuXZGX~;}LO^l&edtYO9eOyJw#+BJ~e(C3E|rc>wW[z1$<');
define('SECURE_AUTH_SALT', 'DPArcBkbpCl0oRua^ ~}JcVd:G=i,K7n2bb}{jrmmpQ[i&yq|k/BM6-YQ^3Ij%>g');
define('LOGGED_IN_SALT',   'Y-g,*Sf1&g4!X&s0ly8b3nlp`R+@Ty[d`yZ!/OAq27xf|MGM81g]S}ne{~ggEuE+');
define('NONCE_SALT',       'CsPUbA`oR,;7N|=P*W]E74B2e;gMsl%?.$Pt)Pm{E33QZ#SEh%30+X*SD<qfEn2G');

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
/* contact form 7 fucking <p> down */
define('WPCF7_AUTOP', false);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//define('FS_METHOD','direct');