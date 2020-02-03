<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AnnShop</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Дефолтный сброс стилей -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- slick - слайдер -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <!-- Мои стили-->
    <link rel="stylesheet" href="css/style.css">

    <!-- icon awesome -->
    <script defer src="fontawesome/all.min.js"></script>

    

</head>

<body>

    <!-- =============================================================================== -->
    <div class="wrapper">

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- HEADER -->
        <?php
            require('templates/header.php')
        ?>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <!-- Массив с товарами -->
        <?php
            require('data.php')
        ?>

        <?php
            // вывод страниц, в зависимости от условий
            if (!isset($page)) {
                // если отсутствыет параметр page - выводится главная страница
            } elseif ($page == 'shop') {
            } elseif ($page == 'product') {
            }

            // Из массива GET с параметром 'page' page кладем в переменную $page значение
            $page = $_GET['page'];
            // Пишем цепочку условий
            if (!isset($page)) {
                // если отсутствыет параметр page
                require('templates/main.php');
            } elseif ($page == 'shop') {
                require('templates/shop.php');
            } elseif ($page == 'product') {
                // Получаем id gпродукта, который есть в URL (из массива GET) и заносим его в переменную $id
                $id = $_GET['id'];
                // Создаем пустой массив $good, в нем будет хранится товар для отображения на странице
                $good = [];
                // ищем товар в массиве goods - будем перебирать весь массив с товарами
                foreach ($goods as $product) {
                    // Будем проверять id каждого товара и сравнивать с тем, что запрашивается в адресной строке
                    if ($product['id'] == $id) {
                        // Если id продукта = id, которое мы хотим получить, то в переменную $good кладем этот продукт
                        //(то есть и будет тот массив товара, который нам нужен)
                        $good = $product;
                        break;
                    }
                }
                require('templates/product.php');
            }
        ?>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- FOOTER START -->
        <?php
            require('templates/footer.php')
        ?>

    </div>
    <!-- =============================================================================== -->

    <!-- Подключаем jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Подключаем Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- slick-carousel -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>

    <!-- Мои скрипты -->
    <script src="js/script.js"></script>

    <!-- OwlCarousel -->
    <script src="js/owl.carousel.min.js"></script>


</body>

</html>