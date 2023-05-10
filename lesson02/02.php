<?php
/**
 * Парадигмы программирования
 *
 * https://ru.wikipedia.org/wiki/Парадигма_программирования/
 * https://ru.wikipedia.org/wiki/Объектно-ориентированное_программирование/
 * https://ru.wikipedia.org/wiki/Структурное_программирование
 * https://ru.wikipedia.org/wiki/Процедурное_программирование
 */

use JetBrains\PhpStorm\Pure;


/**
 * ОПП. Классы
 */

class Product
{
    private float $price;
    private string $name;
    private float $tax = 0.5;

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceWithTax(): float
    {
        return $this->setTax($this->price);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setTax(float $price): float
    {
        return $price + $this->tax;
    }
}

class Car extends Product
{
    private int $speed;

    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }
}

class Book extends Product
{
    private int $count;

    public function setCount(int $count)
    {
        $this->count = $count;
    }

    public function getCount(): float
    {
        return $this->count;
    }
}

$car = new Car();
$book = new Book();

$car->setPrice(1000);
$car->setName('test');
$car->setSpeed(180);

$book->setPrice(2000);
$book->setName('book');
$book->setCount(50);

print_r($book->getCount());
