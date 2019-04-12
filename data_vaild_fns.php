<?php
function filled_out($form_vars)
{
    //test that each variable has a value.
    foreach ($form_vars as $key =>$value)
    {
        if (!isset($key)||($value =='')) {
            return  false;
        }
    }
}

function valid_email($address){
    //check an email address is possibly valid
    if (preg_match('/^[a-zA-z0-9_\.\-]+@[a-zA-Z0-9\-\.]+$/', $address)) {
        return  true;
    }
    else 
    {
        return false;
    }
}
?>