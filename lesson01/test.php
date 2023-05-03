<?php
function render():String
{
    $num = 1;

    ob_start();
    include 'template.php';
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}

echo render();

