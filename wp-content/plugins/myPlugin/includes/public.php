<?php

class NewsFooter{
    public function __construct()
    {
        newFooter();
        newFooter2();
        add_filter('the_title', array($this,'theTitle'));
    }
    
    public function theTitle(){
        echo 'The Tittlesssssssssss';
    }

}
function newFooter(){
    echo '<div>Hello Wosssrdl</div>';
}

function newFooter2(){
    echo '<div>Hello NewFooter2</div>';

}