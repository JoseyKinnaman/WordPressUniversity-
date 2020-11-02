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
define('AUTH_KEY',         'i/6f5f+GFczBvhsOyLQSXvqwTIVyAs6oYmAuWt/Xg6glS0czjIV465J9OWI+sBsCmijk3n4BfLwZ9d9SE245nw==');
define('SECURE_AUTH_KEY',  'Ml2SsGt1orf81z4bpZhTPjj3YC9r3ABRJSsiFsB2V/5qXvGH2Q9x7ROFhUdpyA74hvLlrzthjyL3ylDsh7g++g==');
define('LOGGED_IN_KEY',    'L7+vrqpFc8SGPAH1+n3ooIWk4fvsIAJxrN1qGY6FouTxUkv1O+p6cn59JlNUnL2sUHEHZfnIOK4tKxrQJ+lAtQ==');
define('NONCE_KEY',        'y8TvK1x1leqTl2tSsQkV8CbgPey4KuPLQLAokXIa0HYWjWwZahWytoChyWE7Y+pJYv1noBMu1Y/m9YNk5bCavg==');
define('AUTH_SALT',        'T6nAtqa6WBtfoNHyBMeZ8f302L6LjgFs3+GdeLAkih+Bw00/M0ptOvNJY9+G1qha0h4MOYCRCXXzO3M2YZJ1ag==');
define('SECURE_AUTH_SALT', 'eHrRD62I2blxVKoCGGDtxJuN8UrznFWaTX6voT7WmmijPiQMDYQGwLVEHxjY+aZ1NBHbw64veyuRVxEaZvc4Bg==');
define('LOGGED_IN_SALT',   's0CkK2U3MDfSlU+NCYmijq+t2s1qSwurJelR2niqxior68ST72aMQeOUoxFHmbCGBd1/YeSfsTXvuCMKp0+CUg==');
define('NONCE_SALT',       'Anaxa/CK97/Mjd7J6+QhwmhWudnO4jwFPpEbOvL4pUT+1ov9SoiirFal9ppKDCDRgURe5ImeE5Y/c2K3ifMNPQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
