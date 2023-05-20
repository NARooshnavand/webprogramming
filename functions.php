<?php 
function dd($in)
{
    echo('<pre>');
    var_dump($in);
    die;
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI']==$value;
}
function abort($code='404')
{
    http_response_code($code);
    require("views/{$code}.view.php");
}
