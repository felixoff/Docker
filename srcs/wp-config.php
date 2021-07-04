
<?php

define( 'DB_NAME', 'wordpress' );

define( 'DB_USER', 'root' );

define( 'DB_PASSWORD', '' );

define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define('WP_HOME','https://localhost/wordpress');
define('WP_SITEURL','https://localhost/wordpress');

define('AUTH_KEY',         'f(D{p<RN_wspG/*g[9o]qr|kc}kOXOFymm M+tuiWmMRLR+s<<l?9A9(gUU5knzQ');
define('SECURE_AUTH_KEY',  '-+cCW`X2XSt-^6adzPHXJKFWrXM|KgH$mvEe.->f^;))SFnaS(2E`0aLYd=xF@-K');
define('LOGGED_IN_KEY',    '>GbKQ<.(ZE*y*B-[j8>=aB8RD1xG?:o16,5HRU>0T^gLoLs^E1WtIxwB1BB z}tx');
define('NONCE_KEY',        '0~~(x1;8V@jd*QEvlSjRMF}x$p6AIJMQfs=*I8vLKryc0r@x7V&#bYGuTm9,8$!;');
define('AUTH_SALT',        '+2MVQ[&s2z[hPbHL>hZRHe9h]B+)8-^s*<OdPr0QdbQV| `g: yOrEP,z>a<Dbee');
define('SECURE_AUTH_SALT', '*ggzU{iW3-p(RLWFO)^#ikm@|$/)D<+9Fh<XxEhzd-b|>!Z+K~|fl}Rscf}zL}wC');
define('LOGGED_IN_SALT',   'xHBfEX/hc }@I^&<gCmlQMMNAQf$w64tTF+Z2 i!>_h ]8=^0-@* (a26l8fUtIr');
define('NONCE_SALT',       '#Y#F?qF>Q!*!-&$8vl|c9s}g]UB;UbX|yx|764GKU:D5dL-f>|^mIG2(@Fz{be}W');


$table_prefix = 'wp_';


define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

