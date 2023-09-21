<?php
define( 'WPCACHEHOME', '/home/admin/web/globalwomanclub.com/public_html/wp-content/plugins/wp-super-cache/' );
define( 'WP_CACHE', true ); // WP-Optimize Cache
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "globalwomanclub" );
/** MySQL database username */
define( 'DB_USER', "wordpress" );
/** MySQL database password */
define( 'DB_PASSWORD', "9fWF56J5Qxaqep" );
/** MySQL hostname */
define( 'DB_HOST', "35.177.206.69" );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_HOME', 'https://globalwomanclub.com' );
define( 'WP_SITEURL', 'https://globalwomanclub.com' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'A3bV9nB7F+jM8D*K1g5:,3Vbn&N+8>c#Vwo=i^r<x1y@mDdt_{S*fYt>):iQ{Dd0' );
define( 'SECURE_AUTH_KEY',   '}e0qp=/0r2<@RPg6.4QC<MX;e/qXRm556sFqA(:799bj:n`iBkrJJBgcMdz=HLYn' );
define( 'LOGGED_IN_KEY',     ',P;T.OydjbpAPdrh&uyPy^?+85(`k+%wps&k|unehGr:Lzq1<16IEwz6dG52es_6' );
define( 'NONCE_KEY',         '#J1}CJwU(YLh`5Eh9~KUMZ[;0^^hv+Nr(-_p,B3f9;gYDG+N/Y]13xl{:+y7d@v@' );
define( 'AUTH_SALT',         ' Enk-9&<*RgE~FAVzULp?bH+]RsTJ.VuXcPJ5Z)?Acftj3GS@E{[?;$$Mb|/QpOh' );
define( 'SECURE_AUTH_SALT',  'r@ t[Nm+[TzZ<`QRCa]4N}V%FgTJ[PK@aBKVcC^y;RJvme}Ysz^~){9,b6M#& P*' );
define( 'LOGGED_IN_SALT',    'E$2!Ff+7]#JIYYdB}cuXgBhMPXup@p5,MYlTJX-[%|)H.W7L~/n:%)L|:OPg/eL*' );
define( 'NONCE_SALT',        'k?4]@[L^>j=Pc|q:j!wWE!(HR}z.N<Q#Gr]+BwP JNVVF^}(1x :-|G7w|AYKZ}M' );
define( 'WP_CACHE_KEY_SALT', 'UmtZ4[rn/+)0^fl+SM>x<)k{asbe ^:Vr+ nu|DLZqTCAF]mT*xb!~+zTjtk]csQ' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
 
$table_prefix = 'wp_';
ini_set('memory_limit','9034M');

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';