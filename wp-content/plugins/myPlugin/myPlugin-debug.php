<?php
/**
 * Plugin Name: SonPlugin
 * Description: PlugIn của bùi hoàng sơn
 * Plugin URI: 
 * Author: bùi hoàng sơn
 * Version: 20.12.1996
 */

use NewsFooter as GlobalNewsFooter;

//giá trị __FILE__ (ý nghĩa là sẽ trỏ thẳng đến folder chứa file này)
//$path = dirname(__FILE__).'/includes/admin.php';
//includes_url() sẽ trỏ đường dẫn tương đối tới folder includes
//content_url() sẽ trỏ đường dẫn tương đối tới folder content
//echo content_url();

//  function myPlugIn(){
//     global $wpdb;
//     echo '<pre>';
// 	print_r($wpdb->queries);
//     echo '</pre>';
//  }

//  add_action('wp_footer', 'myPlugIn');

/**
 * Bài 1
 */

//BT thêm 1 dòng vào db wp_options
// register_activation_hook(__FILE__,'putToDb');

// function putToDb(){
//     $arrays = array (
//         'course' => 'WordPress',
//         'author' => 'Bui Hoang Son',
//         'facebook' => 'hoangsonbui96'
//     );
//     add_option("testNewsOption", $arrays,'','yes');
// }

// $str = 'a:3:{s:6:"course";s:9:"WordPress";s:6:"author";s:13:"Bui Hoang Son";s:8:"facebook";s:13:"hoangsonbui96";}';
// echo '<p>';
// print_r(unserialize($str));
// echo '</p>';

/**
 * Bài 2
 */

// global $wpdb;
// echo '<pre>';
// print_r($wpdb);
// echo '</pre>';

// $sql = "CREATE TABLE `testnewtable` (
    //     `id` int(255) NOT NULL AUTO_INCREMENT,
    //     `name` varchar(2000) NOT NULL,
    //     PRIMARY KEY (`id`)
    //   ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci";
    // require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    // dbDelta($sql);
    



// class NewsFooter{
//     public function newFooter(){
//         echo '<div>Hello Wordlssss</div>';
//     }
// }


// $includeDir = plugin_dir_path(__FILE__). 'includes';

// require_once $includeDir . '/public.php';
// $newsFooterDes = new NewsFooter();

// add_action('wp_footer', array($newsFooterDes, 'newFooter'));


// echo '<pre>';
// print_r($includeDir);
// echo '</pre>';

//khai báo hằng số 

define('SONBUI_MP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SONBUI_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));

//B1:khai báo đường dẫn để lấy file public
$publicDir = SONBUI_MP_PLUGIN_DIR .'/includes/public.php';
//B2:add file public để sử dụng
require_once($publicDir);
//B3:khởi tạo đối tượng
new NewsFooter();

//echo $publicDir;
//$getPublicConstruc = 

//add_action('wp_footer', array());
// add_filter('the_title', 'testActionHook');
// function testActionHook(){
//     echo 'Hello ACEs';
// }
