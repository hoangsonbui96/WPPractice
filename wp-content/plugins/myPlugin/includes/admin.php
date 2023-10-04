<?php
include_once SONBUI_MP_PLUGIN_DIR . '/includes/support.php';

class NewsAdminClass
{
    private $_menuSlug = 'my_setting';
    private $my_optionsValue;
    public function __construct()
    {
        $this->my_optionsValue = get_option("my_setting_option_name_value", array());
        echo '<pre>';
        print_r($this->my_optionsValue);
        echo '</pre>';
        //echo '<br>';
        //print_r(__METHOD__);
        add_action('admin_menu', array($this, 'addDashBroad'));
        add_action('admin_init', array($this, 'register_and_fields'));
    }

    public function addDashBroad()
    {
        $menuSlug = 'my-settings-hehehe';
        //hàm add_dashboard_page dùng để add 1 mục mới vào mục dashbroad ở trên thanh menu admin wp
        //tiêu đề hiển thị trên thanh tab, tiêu đề hiển thị trên menu, quyền hiển thị, path thêm vào url, function thực thi
        //add_dashboard_page('Hello ACE', 'My News Dashboard', 'manage_options', $menuSlug, 'showNewsSetting');
        //hàm add_menu_page dùng để add 1 mục menu mới trên thanh menu wp
        //add_menu_page('News Menu Title', 'My News Menu', 'manage_options', $menuSlug, 'showNewsMenu', '', 3);
        //$subMenuSlug = 'my_sub_menu_slug';
        //hàm add_submenu_page dùng để add các thư mục con vào 1 thư mục lớn trên menu wp
        //add_submenu_page($menuSlug, 'My sub menu', 'My Sub menu', 'manage_options', $subMenuSlug, 'SubMenuPage');
        //hàm add_option dùng để add dữ liệu vào bảng options trong wp
        //add_option();
        //hàm update_option dùng để cập nhật dữ liệu vào bảng options trong wp
        //update_option();
        //hàm get_option dùng để lấy dữ liệu từ bảng options trrong wp và hiển tihj ra ngoài
        //hàm delete_option dùng để xóa dữ liệu vào bảng options trong wp

        ///////

        add_menu_page("MySettings", "My Settings", "manage_options", $this->_menuSlug, array($this, 'settingPageViews'));
    }

    public function settingPageViews()
    {
        //include_one và require_one là import file vào để sử dụng code trong file sẽ được thực thi
        //include: code bên dưới include sẽ tiếp tục thực thi, cho dù file được include có tồn tại hay không.
        //require: code bên dưới require sẽ không được thực thi, nếu file được require không tồn tại.
        include_once SONBUI_MP_PLUGIN_DIR . '/views/mySettingPage.php';

        // echo '<pre>';
        // print_r("test Requires or Includes");
        // echo '</pre>';
    }

    public function register_and_fields()
    {
        //hàm register_setting được dùng để tạo Mục setting mới cho màn admin wp 
        register_setting("test_my_setting_option", "my_setting_option_name_value", array($this, 'validateFunct'));
        //hàm add_settings_section dùng để tạo tiêu đề section cho setting của setting wp 
        add_settings_section("sonbh_main_section", "Main Settings", 'funcForAddSection', $this->_menuSlug);

        add_settings_field("sonbh_new_title", "Tiêu Đề", array($this, 'new_title_input'), $this->_menuSlug, 'sonbh_main_section');
    }

    public function validateFunct($inputValue)
    {
        echo '<pre>';
        print_r($inputValue);
        echo '</pre>';
        //die();
        return $inputValue;
    }

    public function new_title_input()
    {
?>
        <input type="text" name="my_setting_option_name_value[sonbh_new_title]" value="<?php echo esc_attr($this->my_optionsValue['sonbh_new_title']); ?>" placeholder="input please!">

<?php
    }
}

function funcForAddSection()
{
}

function showNewsSetting()
{
    echo '<h1>Hello ACE</h1>';
}

function showNewsMenu()
{
    echo '<h1>Hello My News Menu</h1>';
}
function SubMenuPage()
{
    require(SONBUI_MP_PLUGIN_DIR . 'views/testView.php');
}
