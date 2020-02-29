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
define( 'DB_NAME', 'database_' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0,HlsEQ@F)W1PH2Brh##{H:E?5YmwE^,t=TaRWdVC_cWaWg9 PA/EoC{krEr)r(|' );
define( 'SECURE_AUTH_KEY',  'h(qkxtLJa);[W(VM=#!vSq/RzaD4a}c}lPOZs:~Z@/:6|_c9p@|>9m*~z@NW:mx<' );
define( 'LOGGED_IN_KEY',    '0%O?Ao-;oc|/7w8RvW>+U}lL#F;2zdU{3F4pB&;FE;8M^bEecEra1E`*=WJ4u)Uh' );
define( 'NONCE_KEY',        ' 31Xjc|q%=xW^H,DYYj)mip^[maBF5>JE##2>uS^#cR4T.4k3L%|OP@I$OlG_4U~' );
define( 'AUTH_SALT',        'PBdx^|!%4QU,RbUKsGMzIgAUYA%ylxXq/@{TYmtqRtWZQer]?r/2}%E)i:-~sK,m' );
define( 'SECURE_AUTH_SALT', 'zC^>V|U$X{dWB@-c#=I>KWwp9n{BS?14tKu]$6?-3r_tJyJjy<se&xcY_DKpuSbg' );
define( 'LOGGED_IN_SALT',   '%NmoNi?@~@b: $suYG9.PA|nzp)X_@OrBSA<Xk74DJ#@_ublS/LLdS]Q_QC$^Dzd' );
define( 'NONCE_SALT',       'G;].4!j,P>{v{L1|R($! -~Wo~&B}UwkpUNR7IXmuKVcgI&?wI&!Hp}>q3OQ7enx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
