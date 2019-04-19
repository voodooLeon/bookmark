<?php
require_once 'bookmark_fns.php';
session_start();

//create short variable name.
$new_url =$_POST('new_url');

do_html_header('Adding bookmarks');

try 
{
    check_valid_user();
    if (!filled_out($_POST)) {
        throw new Exception('Form not completely filled out.');
    }
    
    //check URL formate.
    if (strstr($new_url, 'http://')) {
        ;
    }
}

catch (Exception $e)
{
    
}