=== phpharness ===
Contributors: guy morazain
Tags: php, shortcode, quick and dirty
Requires at least: 3.0
Tested up to: 3.1
Stable tag: 1.0
License: GPLv2 or later

phpharness creates a shortcode that lets you specify a php file that you wish to include into a page.
 



== Description ==

phpharness create a shortcode that lets you specify a php file that you wish to include via require_once into a page.
Whatever is returned by your specified function will be displayed.
&#91;phpharness path="path to file to require_once" func="function to fire "]


Notes: The function should be in the form of function_name('1',2...)
       where parameters,if any, are also passed in the stringf defining the function.
       The Path is relative to your root directory
      
