<?php
/*
Plugin Name: phpharness
Plugin URI: http://www.morazain.com/phpharness
Tags: create table from query
Description: phpharness creates a shortcode that lets you specify a php file to include into a page and function to execute within that file. whatever is returned by that function will be displayed. &#91;phpharness path="my file" funtion="my-function('my parameters')"]
author: guy morazain
Author URI: http://www.morazain.com
*/
function phpharness_func($atts)
    {
    global $wp_filesystem, $msg;
    $msg='';
    extract(shortcode_atts(array
        (
        'path' => '',
        'func' => ''
        ), $atts));
require_once(ABSPATH.$path);
eval ("\$buf=".$func.";");
return $buf;

}

add_shortcode('phpharness', 'phpharness_func');

?>