<?php
function display($variable)
{
    ob_start();

    if (!$variable) {
        $title = 'main';
        $variable = 'posts';
    } else {
        $title = $variable;
    }
    $header = show('./template/header.php');
    $content = show('./template/' . $variable . '.php');
    include './template/loyaut.php';
    $res = ob_get_contents();
    ob_end_clean();
    echo $res;
}
function show($template)
{
    ob_start();
    include $template;
    $header = ob_get_contents();
    ob_end_clean();
    return $header;
}
