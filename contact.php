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

    <!-- Мои стили-->
    <link rel="stylesheet" href="css/style.css">

    <!-- icon awesome -->
    <script defer src="fontawesome/all.min.js"></script>

</head>

<body>
    <!-- HEADER -->
    <?php
    require('templates/header.php')
    ?>

    <div class="about-page">
        <div class="grey_section">
            <div class="container">

                <div class="contact-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-section__contact-us contact-us"> 
                                <h3>Contact Us</h3>
                                <p class="contact-us__about">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus fugiat illo error porro praesentium sint ipsam vel velit corporis possimus quasi temporibus reprehenderit tempore sapiente ullam nam animi impedit sit in eum repudiandae, iure suscipit! Doloribus, quo! Eveniet, debitis quod?</p>
                                <div class="contact-us__contact-data">
                                    <div class="data-single">
                                        <i class="fa fa-road"></i> <span>Адрес : Москва. Россия</span>
                                    </div>
                                    <div class="data-single">
                                        <i class="fa fa-phone"></i> <span><a class="red-text" href="#">ann@shop.com</a></span>
                                    </div>
                                    <div class="data-single">
                                        <i class="fa fa-envelope"></i> <span>(+800) 123 456 789</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-section__write-us write-us">
                                <h3>Напишите нам</h3>

                                <div class="contact-form">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Ваше Имя:</label>
                                            <input autofocus type="text" class="form-control" placeholder="Введите Имя..">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ваш email:</label>
                                            <input type="email" class="form-control" placeholder="Введите email..">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Сообщение:</label>
                                            <textarea class="form-control" name="" id="" cols="20" rows="5" placeholder="Ваше сообщение.."></textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btnGrey">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER START -->
    <?php
    require('templates/footer.php')
    ?>
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