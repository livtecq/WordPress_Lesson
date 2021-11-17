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
define('AUTH_KEY',         'noNCa9LDPvJmSX4gUh+LBnKOkhcFsnOcA/FRTLL1TmgCy7vumN/BTXSAlB2kTcpxQRwdiwsWxornfb+tx7UPwA==');
define('SECURE_AUTH_KEY',  'vLisPwdQikG6C3ndrwlA/IuVYeZ7bjnpj/AaMYvRlJd/fRomd459AePkkD8DQ6sjiJko0xuvtWUoHvyaCImmvw==');
define('LOGGED_IN_KEY',    'q4OB6NK/zctNGk8rNgqJx0lWXSUyVFtW3E2YFXTfnZKVcRgrVswCMj3hc1xy9x+RUwrIQ967rcJNPG7xWQ7cuA==');
define('NONCE_KEY',        'X4a2Al02xd1VDt4pTWIO0feI7UWUAQM3irAu4/ZG0A3lcT4j4Y0ay2z22l2sBEKqVOYnoMFdfVv34JcsWjsCCA==');
define('AUTH_SALT',        'xr/CuUtP4RcotVgVrNZlohWvo4OOMASivtXaEWGWUgXnUcGe/dfhGvSzzr0sdjqcq9VCYA3/uyQvz5C7kBKQQQ==');
define('SECURE_AUTH_SALT', 'orkdGo9ns7a4CxFGkqWy5PCity+H8j2kC/SKtbwSo2g2p4v819kNjD/jPWMHAeMV1lECowqXoM7I7EFxeqJxNQ==');
define('LOGGED_IN_SALT',   '1/hTuBNIy1nWrAwbBPw19h7wuEsUl03IzbGsrQPFcawEYUiOcpL3+wyR4gxi7NayEH+o4KUtiQe4uRQ7kwPS/w==');
define('NONCE_SALT',       'gxJDNp3ESqGW3zGjP3OwZTxvSrrAHWgDw/6428WM1kYYbwPhhsPl9K/TQ5YrkTTvrwLJyT9Qh6RWWgPbVF0c0A==');

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
