<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AnnShop - TEST</title>
    <!-- Мои стили-->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>

    <!-- =============================================================================== -->
    <div style=" padding: 40px 60px 100px">

    <?php
        // МАССИВ
        $product = [1, 'Apple iPhone 11', 'Black', 'img/product/product9.jpg', '59 990 р.'];
        // Выводим весь массив
        var_dump($product);
        echo '<br>';
        // Выводим второй эллемент массива
        echo $product[2] . '<br>';
        // добавляем в массив элемент 5 и присваиваем ему значение
        $product[5] = '	64 ГБ';
        echo '<br>';
        // добавляем в массив элемент 10 и присваиваем ему значение
        $product[10] = 22;
        // добавляем в массив элемент без указания номера (автоматически присвоится следующий, в нашем случае 11)
        $product[] = 140;
        // Выводим весь массив
        var_dump($product);
    ?>

    <hr>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <?php
        // АСОЦИАТИВНЫЙ МАССИВ (массив, с используванием ключей)
        $productas = [
            'id' => 1,
            'name' => 'Apple iPhone 11',
            'img' => 'img/product/product9.jpg',
            'price' => '59 990 р.'
        ];
        var_dump($productas);
        // Обращаемся к элементу массиву не по номеру, а по ключу
        echo $productas['name'] . '<br>';
        echo $productas['price'] . '<br>';
        // Добавляем  новый элемент в массив
        $productas['color'] = 162;
        var_dump($productas);
    ?>

    <!-- в теге img src Выводим 3ий элемент массива, где записан путь до картинки -->
    <img style="width: 140px; display: block" src="<?php echo $productas['img']; ?>" alt="">

    <hr>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <?php
    // МНОЖЕСТВЕННЫЙ МАССИВ ( = множество данных, = двумерный массив)
        $goods = [
            [
                'id' => 1,
                'name' => 'Описание для Iphone',
                'img' => 'img/product/product9.jpg',
                'price' => '59 990 р.'
            ],
            [
                'id' => 2,
                'name' => 'HTC',
                'desc' => 'Описание для HTC',
                'img' => 'img/product/product9.jpg',
                'price' => '32 000 р.'
            ],
            [
                'id' => 3,
                'name' => 'Samsung',
                'desc' => 'Описание для Samsung',
                'img' => 'img/product/product9.jpg',
                'price' => '48 990 р.'
            ]
        ];

        // Получим имя 2ого товара
        echo $goods[1]['name'] . '<br>';
        echo $goods[2]['desc'] . '<br>';
        echo $goods[0]['price'] . '<br>';

        // Добавим еще 1 товар

        $goods[] = [
            'id' => 4,
            'name' => 'Sony',
            'desc' => 'Описание для Sony',
            'img' => 'img/product/product9.jpg',
            'price' => '37 990 р.',
            'discount' => 20,
            'count' => 34
        ];

        // добавим  ключ со значением ко 2ому элементу (к "под-массиву")
        $goods[2]['discount'] = 40;

        // Выведем множественный массив
        echo '<pre>';
        var_dump($goods);
        echo '</pre>';
    ?>

    <hr>

    <?php
        // ЦИКЛ
        foreach ($goods as $key => $good) {
            // Пишем команды, которые будут выполнятся при каждом перевобре массива $goods
            echo $good['id'] . $key . '<br>';
            echo $good['id'] . '<br>';
            echo $good['name'] . '<br>';
            echo $good['img'] . '<br>';
            echo $good['price'] . '<br>';
            echo '<div style="border-bottom: solid 1px #98a9ff; width: 500px; margin: 10px 0"></div>';
        }
    ?>
    <hr>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <?php
        // СУПЕРГЛОБАЛЬНЫЙ МАССИВ $_GET
        var_dump($_GET);

        // http://annshop/index.php?page=shop
        // http://annshop/index.php?page=product&id=1
    ?>

    <hr>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <?php
        // УСЛОВНЫЙ ОПЕРАТОР if
        if (5 + 3 == 8) {
            echo 'я написана, потому что выражение есть true';
        };

        echo '<hr>';

        // вывод страниц, в зависимости от условий
        if (!isset($page)) {
            // если отсутствыет параметр page - выводится главная страница
        }
        elseif ($page == 'shop') {
        }
        elseif ($page == 'product') {
        }

        // Из массива GET с параметром 'page' page кладем в переменную $page значение
        $page = $_GET['page'];
        // Пишем цепочку условий
        if (!isset($page)) {
            // если отсутствыет параметр page
            echo '<h3>Здесь будет контент для главной страницы</h3>';
        } elseif ($page == 'shop') {
            echo '<h3>Здесь будет каталог товаров</h3>';
        } elseif ($page == 'product') {
            echo '<h3>Здесь будет страница с товаром</h3>';
        }
    ?>




    </div>

    <!-- =============================================================================== -->

</body>

</html>