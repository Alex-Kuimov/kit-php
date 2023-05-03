<?php
/**
 * 1. Типы Данных
 * https://www.php.net/manual/ru/language.types.intro.php
 * https://stackoverflow.com/questions/137487/null-vs-false-vs-0-in-php
 */

$null = null;
$str = 'Я строка!!!';
$num = 1;
$float = 1.4;
$bool = true;
$arr = [1, 2, 3, 4, 5];

/**
 * Callback-функция
 */
function my_callback_function() {
    echo 'Привет, я колбэк функция!';
}

call_user_func('my_callback_function');

class MyClass {
    public function myFunc() {
        echo 'Привет, я экземпляр класса!';
    }
}

/**
 * Объект
 */
$obj = new MyClass();
$obj->myFunc();

/**
 * Ресурс
 */
$file = fopen('file.txt', 'r');
if ($file) {
    $resource = fread($file, filesize('file.txt'));
    fclose($file);
    echo $resource;
}

/**
 * Втроенные функции
 */
if(is_null($str)){
    echo 'ok';
}

if(is_string($str)){
    echo 'ok';
}

if(is_numeric($str)){
    echo 'ok';
}

if(is_float($str)){
    echo 'ok';
}

if(is_array($str)){
    echo 'ok';
}

if(in_array(1, $arr, true)){
    echo 'ok';
}

if(is_object($str)){
    echo 'ok';
}

/**
 * Название переменых и стандарты. Codesniffer
 * https://jeka.by/post/1099/php-codesniffer-phpstorm/
 */

$items = [];
$item = [];
$arr = [];
$str = '';
$num = 1;
$obj = new MyClass();
$flag = true;