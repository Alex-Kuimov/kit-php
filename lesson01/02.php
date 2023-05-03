<?php
/**
 * Операторы данных
 * https://www.php.net/manual/ru/language.operators.php
 */

$total = 1 + 2;
$total = 1 - 2;
$total = 1 * 2;
$total = 1 / 2;

/**
 * Операторы сравнения
 * https://www.php.net/manual/ru/language.operators.comparison.php
 */

$res = 1 > 0;
$res = 1 <= 0;
$res = 1 !== 0;
$res = 1 === 0;

/**
 * Приоритет оператора
 * https://puzzleweb.ru/php/12_operators.php
 */

$res = 1 && 0;
$res = 1 || 0;
$res = 1 and 0;
$res = 1 or 0;

/**
 * Управляющие конструкции
 * https://www.php.net/manual/ru/language.control-structures.php
 *
 * https://www.php.net/manual/ru/control-structures.if.php
 * https://www.php.net/manual/ru/control-structures.else.php
 */

if (1 > 0) {
    echo '1 больше 0';
} else {
    echo '1 меньше 0';
}

/**
 * Тернарные выражения
 */

$res = 1 > 0 ? '1 больше 0' : '1 меньше 0';
echo $res;

$name = $_POST['name'] ?? null;
$name = isset($_POST['name']) ? $_POST['name'] : null;

/**
 * Циклы
 * https://www.php.net/manual/ru/control-structures.for.php
 * https://www.php.net/manual/ru/control-structures.foreach.php
 */

for ($i = 1; $i <= 10; $i++) {
    echo $i . ' ';
}

$myArray = ['apple' => 'green', 'banana' => 'yellow', 'orange' => 'orange'];

foreach ($myArray as $key => $value) {
    echo $key . ' is ' . $value . '<br>';
}

/**
 * Работат с массивами
 *
 * https://www.php.net/manual/ru/ref.array.php
 * https://www.php.net/manual/ru/function.in-array.php
 * https://www.php.net/manual/ru/function.array-map.php
 * https://www.php.net/manual/ru/function.array-filter.php
 * https://wiki.php.net/rfc/spread_operator_for_array
 *
 */

$num = 1;

if($num == '1'){
    echo 'ok';
}

if($num === 1){
    echo 'ok';
}


$roles = ['admin', 'manager', 'subscriber'];
$role = 'admin';


if (in_array($role, $roles, true)) {
    echo 'ok';
}

$users = [
    [
        'name' => 'паша',
        'age' => 20,
    ],
    [
        'name' => 'саша',
        'age' => 30,
    ],
    [
        'name'=>'никита',
        'age' => 30,
    ],
    [
        'name'=>'серега',
        'age' => 50,
    ]
];

//замена значений
$users = array_map(function($user){
    return [
        'name' => $user['name'],
        'age' => 20,
    ];
},$users);

//достаем нужные значения
$users = array_filter($users, function($user){
    return $user['age'] === 30 ? $user : null;
});

//создаем новый массив на основе др. масива
$arr = ['user', ...$roles];

/**
 * Работа с функцией
 */

function myFunc(): ?String
{
    //1. проверка данных
    $name = isset($_POST['name']) && empty($_POST['name']) ? strip_tags(trim($_POST['name'])): null;

    //2. Какие - то манипуляции
    $result = 'Все хорошо';

    if (strlen($name) < 3) {
        $result = 'Имя слишком короткое';
    }

    //3. Отдаем результат
    return $result;
}
