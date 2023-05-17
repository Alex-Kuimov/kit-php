<?php
/**
 * Полиморфизм
 */
class Shape
{
    public function getArea() {}
}

class Rectangle extends Shape
{
    private int $width;
    private int $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float|int
    {
        return $this->width * $this->height;
    }
}

class Circle extends Shape
{
    private int $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea(): float|int
    {
        return pi() * pow($this->radius, 2);
    }
}

$shapes = [
    new Rectangle(10, 20),
    new Circle(15)
];

foreach($shapes as $shape) {
    echo $shape->getArea() . "<br>";
}


/**
 * Codesniffer
 *
 * Для установки запускаем вот эту команду в терминале: composer require squizlabs/PHP_CodeSniffer
 * Далее в папке cs смотрим скрины
 */


/**
 * Class autoloader
 *
 * https://www.php.net/manual/ru/function.spl-autoload-register.php
 */
spl_autoload_register(function ($class) {
    $name = str_replace('App\\', '', $class);
    require_once './app/' . $name . '.php';
});