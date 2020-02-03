<header>
    <div class="container">
        <div class="header-top d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <p>Интернет-магазин бытовой и цифровой техники</p>
            </div>
            <div class="header-top__contact-block d-lg-flex flex-wrap justify-content-end p-0">
                <p class="header-top__contact"><a href="#">ann@shop.com</a></p>
                <p class="header-top__contact"><a href="#">8 800 123 45 67</a></p>
            </div>
        </div>

        <div class="header-main d-flex justify-content-between">
            <div class="col-lg-2 col-md-10 col-xs-10 p-0">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="img/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-lg-10 col-md-2 col-xs-2 p-0">
                <nav class="navbar navbar-expand-lg static-top p-0 d-flex justify-content-end">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Каталог
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=shop">Каталог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Оплата</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Доставка</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Акции</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                        </ul>

                        <div class="header-action d-flex flex-wrap justify-content-lg-end justify-content-center">
                            <div class="wishlist">
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="basket">
                                <a href="#"><i class="fas fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>

        <!-- !!! Схлопывать категори!!!!!! -->
        <!-- !!! сделать СВОЙ дропдаун!! !!!!! -->
        <div class="header-bottom d-flex flex-wrap justify-content-between row">
            <div class="header-bottom__colimn-1 col-lg-3 col-xs-12">
                <div class="header-bottom__all-categories">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btnRed header-bottom__btn-categories dropdown-toggle w-100">
                        Все категории
                    </button>
                    <div class="header-bottom__menu dropdown-menu w-100">
                        <a class="dropdown-item header-bottom__item" href="#">Бытовая техника</a>
                        <a class="dropdown-item header-bottom__item" href="#">Смартфоны</a>
                        <a class="dropdown-item header-bottom__item" href="#">ТВ и приставки</a>
                        <a class="dropdown-item header-bottom__item" href="#">Компьютеры</a>
                        <a class="dropdown-item header-bottom__item" href="#">Красота и здоровье</a>
                        <a class="dropdown-item header-bottom__item" href="#">Спорт</a>
                        <a class="dropdown-item header-bottom__item" href="#">Аксессуары</a>
                        <a class="dropdown-item header-bottom__item" href="#">Автотовары</a>
                        <a class="dropdown-item header-bottom__item" href="#">Детские товары</a>
                        <a class="dropdown-item header-bottom__item" href="#">Инструменты</a>
                        <a class="dropdown-item header-bottom__item" href="#">Портативная техника</a>
                    </div>
                </div>
            </div>
            <div class="header-bottom__colimn-2 col-lg-6 col-xs-12">
                <div class="header-bottom__input-search d-none d-lg-block d-sm-block">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn dropdown-toggle btnLightGrey" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Категории</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Найти товар..." aria-label="">
                        <div class="input-group-append">
                            <button class="btn btnRed" type="button">Поиск</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom__colimn-3 col-lg-3 col-xs-12">
                <div class="header-bottom__btn-discounts">
                    <a href="#" class="btnGrey w-100">Супер предложения</a>
                </div>
            </div>
        </div>
    </div>
</header>