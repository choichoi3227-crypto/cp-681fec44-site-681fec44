<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'ca18x33j66hnqyv6e48rygsqxhfeibdj2n1h6yobg6jbd3ii0uy5o4dqu29z5kx8' );
define( 'SECURE_AUTH_KEY',  'cl8pdrp18f5hliiys8lrwan3edwep3w7ualhja1dvibd484d97vlx08esotbce91' );
define( 'LOGGED_IN_KEY',    'eyx4zw35af6jx1p2z0lcrbcedf4baftc6t9klxemxv0g8blxj2saaxpo4drpdocm' );
define( 'NONCE_KEY',        '02zekb0ya6c0lq3qj4gi3jexaw5c4yqktt0nitck268dipxs1eih3sbkiyfprmv7' );
define( 'AUTH_SALT',        '4fyc8j5mo3eh1rhhdjyqqfhw7tumcq2qhlcwzmbnafutp7jlc1qr5tf23lp00r8d' );
define( 'SECURE_AUTH_SALT', 'nqtu4yxj178e0cmh41db6dh7oy6fbgfwbm84fedb3r6w91vc4m0qr4uxy4bdkx39' );
define( 'LOGGED_IN_SALT',   'cgd7d9qk7i6oq1nvv2ihab0qtpsjypdcql730nvxoczf4qya5w8rsx7fawb0991c' );
define( 'NONCE_SALT',       '6ne7mwaa8k2izkss12xk1um2oyz3nike1zcjj3fsv78q2v2u4dq0x6tkqxrlshje' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-681fec44-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-681fec44-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
