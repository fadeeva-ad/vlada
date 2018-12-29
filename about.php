<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <? include 'blocks/header.php'?>
    <div class="container">
        <?php include 'blocks/menu.php'?>
        <div class="page__content">
            <div class="block-6">
                <img class="block-6__left" src="production/img/director.png">
                <div class="block-6__right">
                    <img class="block-6__ellipse" src="production/img/yellow-ellipse.svg" alt="">
                    <h1 class="block-6__title">о нас</h1>
                    <?php include 'blocks/bread-crumbs.php';?>
                    <p>Учебный центр парикмахеров – это alma mater для многих специалистов индустрии красоты. В крупных
                        учебных заведениях учатся, как правило, не только парикмахеры, но и косметики, мастера маникюра
                        и педикюра, визажисты и многие, многие другие. Учебный центр парикмахеров – это alma mater для
                        многих специалистов индустрии красоты.</p>
                    <p>Учебный центр парикмахеров – это alma mater для многих специалистов индустрии красоты. В крупных
                        учебных заведениях учатся, как правило, не только парикмахеры, но и косметики, мастера маникюра
                        и педикюра, визажисты и многие, многие другие. Учебный центр парикмахеров – это alma mater для
                        многих специалистов индустрии красоты.</p>
                </div>
            </div>
            <div class="block-7 ">
                <div class="swiper-container block-7__slider default-slider">
                    <div class="navigation">
                        <div class="navigation__wrapper">
                            <div role="button" class="navigation__arrow navigation__arrow_prev">
                                <img src="production/img/icons/slider-arrow(small).svg" alt="назад">
                            </div>
                            <div role="button" class="navigation__arrow navigation__arrow_next">
                                <img src="production/img/icons/slider-arrow(small,next).svg" alt="вперед">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url('production/img/default-img.jpg');"></div>
                        <div class="swiper-slide" style="background-image: url('production/img/default-img.jpg');"></div>
                        <div class="swiper-slide" style="background-image: url('production/img/default-img.jpg');"></div>
                    </div>
                </div>
            </div>
            <div class="prepods-slider">
                <h2 class="prepods-slider__title">преподаватели</h2>
                <div class="prepods-slider__content">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php include 'blocks/prepod.php';?>
                            </div>
                            <div class="swiper-slide">
                                <?php include 'blocks/prepod.php';?>
                            </div>
                            <div class="swiper-slide">
                                <?php include 'blocks/prepod.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="navigation navigation_vertical">
                        <div class="navigation__wrapper">
                            <div role="button" class="navigation__arrow navigation__arrow_prev">
                                <img src="production/img/icons/slider-arrow(small).svg" alt="назад">
                            </div>
                            <div role="button" class="navigation__arrow navigation__arrow_next">
                                <img src="production/img/icons/slider-arrow(small,next).svg" alt="вперед">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-8">
                <h2 class="block-8__title">
                    Как создавалась система подготовки
                </h2>
                <img src="production/img/rounded-img.png" alt="" class="block-8__img">
                <div class="block-8__text">Существует масса западных систем подготовки парикмахеров, и многие из них
                    достаточно эффективны. Именно одну из таких систем мы и собирались выбрать, когда открывали
                    Институт парикмахерского искусства и эстетики ВЛАДА. Но! Грянул кризис 1998 года и приобрести такую
                    систему, которая, надо сказать, стоит немало, не получилось. Тогда я собрала все свои книги,
                    журналы, тетради, конспекты и засела за письменный стол. Надо сказать, что я неплохо говорю
                    по-английски, поэтому смогла и поработать, и поучиться во время перестройки в разных европейских
                    странах. И никогда не жалела денег на учебники. Одни только книги Видала Сэссуна чего стоят! Так
                    что материала у меня накопилось предостаточно.</div>
            </div>
            <div class="about-us ">
                <h2 class="about-us__title">о нас говорят</h2>
                <div class="swiper-container default-slider">
                    <div class="navigation">
                        <div class="navigation__wrapper">
                            <div role="button" class="navigation__arrow navigation__arrow_prev">
                                <img src="production/img/icons/slider-arrow(small).svg" alt="назад">
                            </div>
                            <div role="button" class="navigation__arrow navigation__arrow_next">
                                <img src="production/img/icons/slider-arrow(small,next).svg" alt="вперед">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <iframe src="https://www.youtube.com/embed/Y4H7JjCgrUg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="swiper-slide">
                            <iframe src="https://www.youtube.com/embed/nxuIqRxdoHM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <a href="javascript:;" class="about-us__all link">все отзывы</a>
            </div>
            <a href="javascript:;" class="block-9 link">
                <div class="block-9__text">сведения об образовательной организации</div>
                <div class="block-9__arrow">
                    <img src="production/img/icons/slider-arrow(small,next).svg" alt="" class="svg">
                </div>
            </a>
        </div>
    </div>
    <? include 'blocks/footer-form.php'?>
    <? include 'blocks/footer.php'?>
</body>

</html>