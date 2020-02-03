<div class="product-page">
    <div class="container" style="margin-bottom: 150px;">

        <div class="good-box">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="good-box__img-box">
                        <img class="img-fluid" src="<?php echo $good['img']; ?>">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="good-box__infoMain-box">
                        <h3 class="good-box__title-good">
                            <?php echo $good['name']; ?>
                        </h3>
                        <div class="rating-star mb-3">
                            <ul class="d-flex">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <div class="price mb-3">
                            <span class="price__old">$80.00</span>
                            <span class="price__current">
                                <?php echo $good['price']; ?>
                            </span>
                        </div>
                        <div class="good-box__desc-good">
                            <p><?php echo $good['desc']; ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cum explicabo porro ullam recusandae soluta sunt corporis dolore quibusdam quasi? Itaque nobis distinctio veritatis, voluptatem quod, aliquam pariatur error quasi maxime inventore obcaecati iste aliquid ad animi laboriosam eum ducimus minus rem! Maiores, culpa? </p>
                        </div>

                        <a class="btnRed" href="">Добавить в корзину</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tabs-head">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-tabs__item active" data-toggle="tab" href="#description">
                                    Описание
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-tabs__item" data-toggle="tab" href="#specific">
                                    Характеристики
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-tabs__item" data-toggle="tab" href="#reviews">
                                    Отзывы
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores esse, doloremque dolorem laborum magnam soluta modi cum itaque voluptatibus vitae praesentium eum commodi, placeat voluptas! Impedit maxime eveniet necessitatibus voluptas consequuntur eaque pariatur porro quisquam. Cumque nisi totam, voluptates veniam doloremque exercitationem similique cupiditate!
                        </div>
                        <div id="specific" class="tab-pane">
                            <div class="specific">
                                <h4 class="specific__title">Экран телевизора</h4>
                                <table class="specific__table">
                                    <tr>
                                        <td>Диагональ</td>
                                        <td>32 "</td>
                                    </tr>
                                    <tr>
                                        <td>Разрешение</td>
                                        <td>1366 x 768</td>
                                    </tr>
                                    <tr>
                                        <td>Формат экрана</td>
                                        <td>16:9</td>
                                    </tr>
                                    <tr>
                                        <td>Время отклика пикселя</td>
                                        <td>6.5 мс</td>
                                    </tr>
                                </table>

                                <h4 class="specific__title">Тюнер телевизора</h4>
                                <table class="specific__table">
                                    <tr>
                                        <td>Цифровой тюнер DVB-T2</td>
                                        <td>есть</td>
                                    </tr>
                                    <tr>
                                        <td>Цифровой тюнер DVB-C</td>
                                        <td>есть</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="reviews" class="tab-pane">
                            <div class="reviews">
                                <h4 class="reviews__title">Добавить отзыв</h4>
                                <p  class="reviews__descr">Ваш электронный адрес не будет опубликован.</p>

                                <div class="reviews-form">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="revText">Ваш отзыв:</label>
                                            <textarea class="form-control" required name="" id="revText" rows="8" placeholder="Напишите Ваш отзыв.."></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="revName">Вашe Имя:</label>
                                                <input id="revName" required type="text" class="form-control" placeholder="Введите Имя..">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="revEmail">Ваш Email:</label>
                                                <input id="revEmail" required type="email" class="form-control" placeholder="name@example.com">
                                            </div>
                                        </div>
                                        <div class="button-box mt-3">
                                            <button class="btn btnGrey" type="submit">Отправить</button>
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
</div>