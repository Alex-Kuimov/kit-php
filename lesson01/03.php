<?php
/**
 * Подключение файлов
 *
 * https://www.php.net/manual/ru/function.include.php
 * https://www.php.net/manual/ru/function.include-once.php
 * https://www.php.net/manual/ru/function.require.php
 * https://www.php.net/manual/ru/function.require-once.php
 */

include 'vars.php';
include_once 'vars.php';

require 'somefile.php';
require_once 'somefile.php';


/**
 * Буфер вывода
 *
 * https://anton.shevchuk.name/php/php-for-beginners-output-buffer/
 */

ob_start();
echo "hello world";
$content = ob_get_contents();
ob_end_clean();

function getTemplate():String
{
    ob_start();
    include 'template.php';
    return ob_get_clean();
}

echo getTemplate();