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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+_5Zs4)tLfs%<MKemM*k-ZrRwb~g|){gSdNoG#.0}<iQVyq^16R<TL[>_pTNCT$<' );
define( 'SECURE_AUTH_KEY',  'oUCuygddE~l/e,T6jGVsGF+]=Z6M1T]hR<:5`OB:9+dqO>2= Iki$0..Fk;k?B{>' );
define( 'LOGGED_IN_KEY',    '*h>Ptdl+mU/UD7MZ`8+!O$ewz]`6PrD5p!xGruq(#[3k1LHQycMz=8zbMB Y|/Mb' );
define( 'NONCE_KEY',        'QeVV9)?M;=uV31Bu{gwK3$%H$ly}QaZxtZ#,0q3Y.Cp(rg1=}]1n$G0:LHO6eXvV' );
define( 'AUTH_SALT',        '11s_/p5*.2Fx+`9d;rxZD+_c_aPHjiE=F_jXs,3Od&fmtq/ i*mcqj{L%!Yx%io9' );
define( 'SECURE_AUTH_SALT', 'zh=Y%^P|@/L01C{&NCgV26HCnk(dZMEoV({dU705g``i/T#iu%Z3}ODfhV^PyIh1' );
define( 'LOGGED_IN_SALT',   'bXz2lM(VZ^E:$fVqY,B{[ |)~wW]HE#WhWtp;VMR8v-0y>7YHEY!J}TuUmDAw?Z9' );
define( 'NONCE_SALT',       'F<CyVG:68g{M%m= ~G0aQL=C1YJVC2B%%VlxsS{]iL@ui*v?tKOdb.|o`g)g#_@4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp87_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
