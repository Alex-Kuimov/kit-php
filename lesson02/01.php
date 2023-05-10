<?php
/**
 * Работа с массивами и Big O
 *
 * https://www.php.net/manual/ru/function.array-merge.php
 * https://www.php.net/manual/ru/function.array-column.php
 * https://habr.com/ru/articles/444594/
 */
$shops = [
    [
        'id' => 1,
        'name' => 'Магазин 1',
        'address' => 'Геленджик',
        'products' => [
            [
                'id' => 1,
                'name' => 'продукт01',
                'price' => 1000,
                'shop_id' => '1',
            ],
            [
                'id' => 2,
                'name' => 'продукт02',
                'price' => 2000,
                'shop_id' => '1',
            ],
        ]
    ],
    [
        'id' => 2,
        'name' => 'Магазин 2',
        'address' => 'Краснодар',
        'products' => [
            [
                'id' => 3,
                'name' => 'продукт01',
                'price' => 1000,
                'shop_id' => '2',
            ],
            [
                'id' => 4,
                'name' => 'продукт02',
                'price' => 2000,
                'shop_id' => '2',
            ],
        ]
    ],
];


function getProducts1(Array $shops):?Array
{

// такую проверку можно не делать. Мы уже указали что ждем массив.
//    if(!is_array($shops)){
//        return null;
//    }

    if(empty($shops)){
        return null;
    }

    $products = [];

    foreach ($shops as $shop) {
        if(!isset($shop['products'])){
            continue;
        }

        if(count($shop['products']) === 0){
            continue;
        }

        //!!!!!!!!! так не надо делать !!!!!!!!!!!!
        foreach ($shop['products'] as $product){
            $products[] = $product;
        }
    }

    return $products;
}


function getProducts2(Array $shops):?Array
{
    //раннее прерывание выполнения функции
    if(empty($shops)){
        return null;
    }

    $products = array_column($shops, 'products');

    if(empty($products)){
        return null;
    }

    return array_merge(...$products);
}

//$products = getProducts1($shops);
$products = getProducts2($shops);

echo '<pre>';
print_r($products);
echo '</pre>';