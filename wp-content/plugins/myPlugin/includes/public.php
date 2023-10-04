<?php
include_once SONBUI_MP_PLUGIN_DIR . '/includes/support.php';

class NewsFooter
{
    public function __construct()
    {
        //newFooter();
        //newFooter2();
        //add_filter('the_title', array($this, 'getFncFromSupport'));

        add_filter('the_title', array($this, 'changeString'));
        add_filter('the_content', array($this, 'changeString'));
    }

    public function getFncFromSupport()
    {
        SonSupport::testWithOut();
    }

    public function changeString($text)
    {
        if (current_filter() == 'the_title') {
            //echo '</br>' . 'Dang su dung hook "the_title"';
?>
            <h1>Test HTML</h1>
<?php


        }
        if (current_filter() == 'the_content') {
            echo '</br>' . 'Dang su dung hook "the_content"';
        }
    }
}
function newFooter()
{
    echo '<div>Hello Wosssrdl</div>';
}

function newFooter2()
{
    echo '<div>Hello NewFooter2</div>';
}
