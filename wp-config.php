<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt,
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'constructor' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'Admin123@' );
define('WP_HOME','http://xaynhadaklak.com');
define('WP_SITEURL','http://xaynhadaklak.com');
/** Hostname của database */
define( 'DB_HOST', 'localhost' );
	define( 'WP_MEMORY_LIMIT', '256M' );
/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');
define( 'FS_METHOD', 'direct' );
/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@|]PD6i5l]j$2&V$&0>[ID6kQ*lK<(KvSXwo~RbYTLHz.=.uy@sFo{cH4#`vsIpX' );
define( 'SECURE_AUTH_KEY',  'z0EeYr]n6&8*uXUC:!DR7c,Av19K(5772a,3$mM$/l8EKh.*B|yN5=%MAmpTq-Z9' );
define( 'LOGGED_IN_KEY',    'v^%NzVBH+*1W4&ccZOvETdY1_?f(hRNZfN3O96p=3Dj-8we>O]8aG;UDUX8pxjOT' );
define( 'NONCE_KEY',        '$?NL$KI(<.CRP>k9?.}-ap8(6etKfRn5UpbYo9j:Tfyo1v7%S3yPT I+L21=5956' );
define( 'AUTH_SALT',        'mQ0`2N0g8fa`a4B =<{wsHn!p[p%:P^%{i;l@Q-1i`6l!d_n6F185CYS,EMbi#(D' );
define( 'SECURE_AUTH_SALT', 't?-Ig9pv=DuVSUC:pZjUMr8(~xo9U^ 4Q:~!$mf%#uG]v@OXXr[4suqK=`;5KL(%' );
define( 'LOGGED_IN_SALT',   'qK)] z}MZO2:g_y[@g/V7.~,#wt|~-Qfn5h6?Ee*G1s!T#,fa|8:tmb!hFY)_)*h' );
define( 'NONCE_SALT',       'c#OP.6,,/[5AEn^`YSa!f<~%YB)E:Vi?4{JKrm=n)2}3=Df8s@#++SVy?g[Ds,1U' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
