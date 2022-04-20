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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cNxnnIZpWSK02kgyiUXu0oEyOUwnLd3+zevf1/B4FKkZk1RvshMX3FTp5vuevzwzyMB6B3gjWPPAzkmrVNMMhQ==');
define('SECURE_AUTH_KEY',  'g4mihwRvPJ77mEZmufku8tIn+47RG7PMFG0w4mWZMUNO8XhhfJzjgNIZHSqV4Q52oxpOPzuedmfY2MXKwloGfA==');
define('LOGGED_IN_KEY',    '4+tzbT3YedynSxJt46Ar+Lx+IwFsYs98NUs0NDQPrJmbWGMisHrNFEXylEIBFf8fvaI0L7sWi9pAWTCKmop6vA==');
define('NONCE_KEY',        'Nv6VEphtxcVeaVYR9xAnNdP5n2r2QKCW7RHdCpNriMHX7UgAQThkzznw+WXB2QTN2t1UJDgqPRBXno7TdLK/Bw==');
define('AUTH_SALT',        'yo3qbBq00FtE2t7HJc7xXf8dHs8RtB+lkC1TyzLJQZRCdX+oVnSt8rmNltf6nD1I59nhGguYbL7SRLPvSeRw0Q==');
define('SECURE_AUTH_SALT', 'JsO6xKD2eRbTm/Pi6CcY+n7ElbGvmBmEn8AnAB/wn+LO9MMQrwNX41UUf8qAIwjcFBMO9iikZ/q8Deb+CJCc4g==');
define('LOGGED_IN_SALT',   'r5MTAdWdB+Ghs/2XlNEWjDeFzup+IovGP/ZUkSb9yTx4MdKwYdczJ6Ea4BRuSgF6AaOmvCaZc6Wm79NWqcxE8w==');
define('NONCE_SALT',       'E4lPMVvyl3djPcp6rX0w6sYfXii1A7pNZrHjT4WGHMeTtQogaIBF+LvZt1EW7cACkzY90KHU6eTNAop6qy2cdA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_HOME', 'http://kuanwumtm6303final.local' );
define( 'WP_SITEURL', 'http://kuanwumtm6303final.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
