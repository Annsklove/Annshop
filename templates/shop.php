<div class="catalog_page">
    <div class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar-catalog">
                        <div class="sidebar-catalog__box">
                            <h3 class="sidebar-catalog__title">
                                Категории товаров
                            </h3>

                            <ul class="sidebar-catalog__category">
                                <li><a href="#">Телевизоры</a></li>
                                <li><a href="#">Игровые приставки</a></li>
                                <li><a href="#">Авто товары</a></li>
                                <li><a href="#">Смарт-часы</a></li>
                                <li><a href="#">Игры для PS4</a></li>
                            </ul>

                            <h3 class="sidebar-catalog__title">
                                Фильтр по цене
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="promo-banners mb-4">
                        <div class="promo-banners__banner promo-banners__banner--bannerW100">
                            <a href="#">
                                <img src="img/slider11.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <?php foreach ($goods as $good) : ?>
                            <div class="product-demo">
                                <div class="product-demo__thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo $good['img']; ?>" alt="">
                                    </a>
                                    <!-- <div>
                                        <span class="product-demo__label product-demo__label--sale">Sale</span>
                                    </div> -->
                                    <div class="product-demo__action-links">
                                        <ul>
                                            <li class="wishlist">
                                                <a class="btnIcon" href="#" title=""><i class="far fa-heart"></i></a>
                                            </li>
                                            <li class="compare">
                                                <a class="btnIcon" href="#" title=""><i class="fas fa-sliders-h"></i></a>
                                            </li>
                                            <li class="quick_button">
                                                <a class="btnIcon" href="#" title=""><i class="fas fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-demo__content">
                                    <div>
                                        <h4>
                                            <a href="index.php?page=product&id=<?php echo $good['id']; ?>">
                                                <?php echo $good['name']; ?>
                                            </a>
                                        </h4>
                                        <p>
                                            <?php echo $good['desc']; ?>
                                        </p>
                                        <div class="rating-star">
                                            <ul class="d-flex justify-content-center">
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <span class="price__old">$86.00</span>
                                            <span class="price__current"><?php echo $good['price']; ?></span>
                                        </div>
                                    </div>
                                    <div class="product-demo__btn-basket">
                                        <a class="btnWhite" href="#" title="">в корзину</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>