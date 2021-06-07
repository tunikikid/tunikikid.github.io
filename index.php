<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laferuchi Mods</title>
        <link rel="stylesheet" href="files/libs.min.css" />
        <link rel="stylesheet" href="files/style.min.css" />

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <script src="files/jquery.min.js"></script>
        <script src="files/main2.js"></script>
        <style class="fslightbox-styles">
            .fslightbox-absoluted {
                position: absolute;
                top: 0;
                left: 0;
            }
            .fslightbox-fade-in {
                animation: fslightbox-fade-in 0.25s cubic-bezier(0, 0, 0.7, 1);
            }
            .fslightbox-fade-out {
                animation: fslightbox-fade-out 0.25s ease;
            }
            .fslightbox-fade-in-strong {
                animation: fslightbox-fade-in-strong 0.25s cubic-bezier(0, 0, 0.7, 1);
            }
            .fslightbox-fade-out-strong {
                animation: fslightbox-fade-out-strong 0.25s ease;
            }
            @keyframes fslightbox-fade-in {
                from {
                    opacity: 0.65;
                }
                to {
                    opacity: 1;
                }
            }
            @keyframes fslightbox-fade-out {
                from {
                    opacity: 0.35;
                }
                to {
                    opacity: 0;
                }
            }
            @keyframes fslightbox-fade-in-strong {
                from {
                    opacity: 0.3;
                }
                to {
                    opacity: 1;
                }
            }
            @keyframes fslightbox-fade-out-strong {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
            .fslightbox-cursor-grabbing {
                cursor: grabbing;
            }
            .fslightbox-full-dimension {
                width: 100%;
                height: 100%;
            }
            .fslightbox-open {
                overflow: hidden;
                height: 100%;
            }
            .fslightbox-flex-centered {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .fslightbox-opacity-0 {
                opacity: 0 !important;
            }
            .fslightbox-opacity-1 {
                opacity: 1 !important;
            }
            .fslightbox-scrollbarfix {
                padding-right: 17px;
            }
            .fslightbox-transform-transition {
                transition: transform 0.3s;
            }
            .fslightbox-container {
                font-family: Arial, sans-serif;
                position: fixed;
                top: 0;
                left: 0;
                background: linear-gradient(rgba(30, 30, 30, 0.9), #000 1810%);
                z-index: 1000000000;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-tap-highlight-color: transparent;
            }
            .fslightbox-container * {
                box-sizing: border-box;
            }
            .fslightbox-svg-path {
                transition: fill 0.15s ease;
                fill: #ddd;
            }
            .fslightbox-nav {
                height: 45px;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
            }
            .fslightbox-slide-number-container {
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                height: 100%;
                font-size: 15px;
                color: #d7d7d7;
                z-index: 0;
                max-width: 55px;
                text-align: left;
            }
            .fslightbox-slide-number-container .fslightbox-flex-centered {
                height: 100%;
            }
            .fslightbox-slash {
                display: block;
                margin: 0 5px;
                width: 1px;
                height: 12px;
                transform: rotate(15deg);
                background: #fff;
            }
            .fslightbox-toolbar {
                position: absolute;
                z-index: 3;
                right: 0;
                top: 0;
                height: 100%;
                display: flex;
                background: rgba(35, 35, 35, 0.65);
            }
            .fslightbox-toolbar-button {
                height: 100%;
                width: 45px;
                cursor: pointer;
            }
            .fslightbox-toolbar-button:hover .fslightbox-svg-path {
                fill: #fff;
            }
            .fslightbox-slide-btn-container {
                display: flex;
                align-items: center;
                padding: 12px 12px 12px 6px;
                position: absolute;
                top: 50%;
                cursor: pointer;
                z-index: 3;
                transform: translateY(-50%);
            }
            @media (min-width: 476px) {
                .fslightbox-slide-btn-container {
                    padding: 22px 22px 22px 6px;
                }
            }
            @media (min-width: 768px) {
                .fslightbox-slide-btn-container {
                    padding: 30px 30px 30px 6px;
                }
            }
            .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
                fill: #f1f1f1;
            }
            .fslightbox-slide-btn {
                padding: 9px;
                font-size: 26px;
                background: rgba(35, 35, 35, 0.65);
            }
            @media (min-width: 768px) {
                .fslightbox-slide-btn {
                    padding: 10px;
                }
            }
            @media (min-width: 1600px) {
                .fslightbox-slide-btn {
                    padding: 11px;
                }
            }
            .fslightbox-slide-btn-container-previous {
                left: 0;
            }
            @media (max-width: 475.99px) {
                .fslightbox-slide-btn-container-previous {
                    padding-left: 3px;
                }
            }
            .fslightbox-slide-btn-container-next {
                right: 0;
                padding-left: 12px;
                padding-right: 3px;
            }
            @media (min-width: 476px) {
                .fslightbox-slide-btn-container-next {
                    padding-left: 22px;
                }
            }
            @media (min-width: 768px) {
                .fslightbox-slide-btn-container-next {
                    padding-left: 30px;
                }
            }
            @media (min-width: 476px) {
                .fslightbox-slide-btn-container-next {
                    padding-right: 6px;
                }
            }
            .fslightbox-down-event-detector {
                position: absolute;
                z-index: 1;
            }
            .fslightbox-slide-swiping-hoverer {
                z-index: 4;
            }
            .fslightbox-invalid-file-wrapper {
                font-size: 22px;
                color: #eaebeb;
                margin: auto;
            }
            .fslightbox-video {
                object-fit: cover;
            }
            .fslightbox-youtube-iframe {
                border: 0;
            }
            .fslightbox-loader {
                display: block;
                margin: auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 67px;
                height: 67px;
            }
            .fslightbox-loader div {
                box-sizing: border-box;
                display: block;
                position: absolute;
                width: 54px;
                height: 54px;
                margin: 6px;
                border: 5px solid;
                border-color: #999 transparent transparent transparent;
                border-radius: 50%;
                animation: fslightbox-loader 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            }
            .fslightbox-loader div:nth-child(1) {
                animation-delay: -0.45s;
            }
            .fslightbox-loader div:nth-child(2) {
                animation-delay: -0.3s;
            }
            .fslightbox-loader div:nth-child(3) {
                animation-delay: -0.15s;
            }
            @keyframes fslightbox-loader {
                0% {
                    transform: rotate(0);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
            .fslightbox-source {
                position: relative;
                margin: auto;
                opacity: 0;
                z-index: 2;
                backface-visibility: hidden;
                transform: translateZ(0);
                transition: opacity 0.3s;
            }
        </style>
<img src="https://track.skacpa.ru/imp?a=394&o=70" height="1" width="1" />
    </head>

    <body>
        <header class="header">
            <nav class="nav">
                <div class="wrapper flex">
                    <div class="nav__logo flex">
                        <img src="files/logo.png" alt="Brilla Mood" />
                        <p class="nav__logo-text">
                            Интернет магазин <br />
                            модных туник
                        </p>
                    </div>
                    <ul class="nav__list flex">
                        <li class="nav__item"><a href="#a" class="nav__link">Преимущества</a></li>
                        <li class="nav__item"><a href="#b" class="nav__link">Каталог</a></li>
                        <li class="nav__item"><a href="#c" class="nav__link">Размеры</a></li>
                        <li class="nav__item"><a href="#d" class="nav__link">Отзывы</a></li>
                        <li class="nav__item"><a href="#e" class="nav__link">Доставка</a></li>
                        <li class="nav__item"><a href="#f" class="nav__link">Гарантии</a></li>
                    </ul>
                    <div class="nav__burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </nav>
            <div class="banner">
                <div class="wrapper">
                    <div class="banner__uptitle">Тотальна распродажа</div>
                    <div class="banner__title">
                        Преобразите свой образ <br />
                        с красивыми стильными <br />
                        туниками
                    </div>
					 <img class="mob-img" src="files/bg-mob.jpg" alt="Sale" /> 
                    <div class="banner__box flex">
                        <ul class="banner__list">
                            <li class="banner__item flex"><img src="files/mark.png" alt="." /> Качественный пошив</li>
                            <li class="banner__item flex"><img src="files/mark.png" alt="." /> Быстрая доставка</li>
                            <li class="banner__item flex"><img src="files/mark.png" alt="." /> Все размеры в наличии</li>
	                        <li class="banner__item flex"><img src="files/mark.png" alt="." /> Акция 1+1=3</li>
                        </ul>
                        <img class="banner__sale" src="files/sale.png" alt="Sale" />
                    </div>
                </div>
            </div>
        </header>
        <div class="sale">
            <div class="wrapper">
                <div class="sale__title">Акция 1+1=3 и скидка</div>
                <div class="sale__box flex">
                    <div class="sale__old">
                        Старая цена <strike><x-oldprice>3980</x-oldprice></strike> <x-currency>руб</x-currency>
                    </div>
                    <div class="sale__new">
                        Цена сегодня: <span><x-newprice>1990</x-newprice> <x-currency>руб</x-currency> </span>
                    </div>
                    <a href="#b" class="btn">Посмотреть Туники</a>
                </div>
                <div class="sale__subtitle">Оставьте заявку, и мы поможем вам подобрать размер!</div>
            </div>
        </div>
        <div class="advantages" id="a">
            <div class="advantages__title h1">наши преимущества</div>
            <div class="wrapper flex">
                <div class="advantages__item">
                    <img src="files/1.png" alt="1" />
                    <div class="advantages__name">обширный ассортимент легких туник</div>
                </div>
                <div class="advantages__item">
                    <img src="files/2.png" alt="1" />
                    <div class="advantages__name">лекала ведущих мировых дизайнеров женской одежды</div>
                </div>
                <div class="advantages__item">
                    <img src="files/3.png" alt="1" />
                    <div class="advantages__name">привлекательные цены и ограниченная акция "1+1=3"</div>
                </div>
                <div class="advantages__item">
                    <img src="files/4.png" alt="1" />
                    <div class="advantages__name">высокое качество материала (вискоза) европейского производства</div>
                </div>
                <div class="advantages__item">
                    <img src="files/5.png" alt="1" />
                    <div class="advantages__name">специалисты помогут сделать заказ в считанные минуты</div>
                </div>
            </div>
        </div>

        <div class="katalog" id="b">
            <div class="h1 katalog__title">Каталог</div>
            <div class="wrapper flex">
                <div class="katalog__item">
                    <a href="files/1.jpg" data-fslightbox="gallery">
                        <img src="files/1.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Жизель»</div>
                    <div class="katalog__art">[АРТ. 01]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/2.jpg" data-fslightbox="gallery">
                        <img src="files/2.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Абель»</div>
                    <div class="katalog__art">[АРТ. 02]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/3.jpg" data-fslightbox="gallery">
                        <img src="files/3.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Берта»</div>
                    <div class="katalog__art">[АРТ. 03]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/4.jpg" data-fslightbox="gallery">
                        <img src="files/4.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Арианна»</div>
                    <div class="katalog__art">[АРТ. 04]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/5.jpg" data-fslightbox="gallery">
                        <img src="files/5.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Коко»</div>
                    <div class="katalog__art">[АРТ. 05]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/6.jpg" data-fslightbox="gallery">
                        <img src="files/6.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Эвелина»</div>
                    <div class="katalog__art">[АРТ. 06]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/7.jpg" data-fslightbox="gallery">
                        <img src="files/7.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Фабия»</div>
                    <div class="katalog__art">[АРТ. 07]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/8.jpg" data-fslightbox="gallery">
                        <img src="files/8.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Венера»</div>
                    <div class="katalog__art">[АРТ. 08]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/9.jpg" data-fslightbox="gallery">
                        <img src="files/9.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Зита»</div>
                    <div class="katalog__art">[АРТ. 09]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/10.jpg" data-fslightbox="gallery">
                        <img src="files/10.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Вероник»</div>
                    <div class="katalog__art">[АРТ. 10]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/11.jpg" data-fslightbox="gallery">
                        <img src="files/11.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Тина»</div>
                    <div class="katalog__art">[АРТ. 11]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/12.jpg" data-fslightbox="gallery">
                        <img src="files/12.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Фибо»</div>
                    <div class="katalog__art">[АРТ. 12]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/13.jpg" data-fslightbox="gallery">
                        <img src="files/13.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Агнесса»</div>
                    <div class="katalog__art">[АРТ. 13]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/14.jpg" data-fslightbox="gallery">
                        <img src="files/14.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Луизиана»</div>
                    <div class="katalog__art">[АРТ. 14]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>
                <div class="katalog__item">
                    <a href="files/15.jpg" data-fslightbox="gallery">
                        <img src="files/15.jpg" alt="1" />
                    </a>
                    <div class="katalog__name">Туника «Дебора»</div>
                    <div class="katalog__art">[АРТ. 15]</div>
                    <div class="katalog__material">
                        Материал: <br />
                        вискоза
                    </div>
                    <div class="katalog__size">
                        Размеры: <br />
                        48 50 52 54 56 58 60 62 64 66 68 70
                    </div>
                    <div class="katalog__aci">
                        Акция: при покупке двух туник - третья в подарок!
                    </div>
                    <div class="katalog__old">
                        <strike><x-oldprice>3980</x-oldprice> <x-currency>руб</x-currency> </strike>
                    </div>
                    <div class="katalog__new"><x-newprice>1990</x-newprice> <x-currency>руб</x-currency></div>
                    <a href="#call" class="btn">Заказать</a>
                </div>


            </div>
        </div>
        <div class="table" id="c">
            <div class="table__title h1">Таблица размеров</div>
            <div class="wrapper">
                <div class="table__box flex">
                    <img src="files/table.png" alt="1" />
                    <img src="files/table-1.png" alt="1" />
                </div>
            </div>
        </div>
        <div class="callback" id="d">
            <div class="callback__title h1">Отзывы</div>
            <div class="wrapper">
                <div class="callback__box flex">
                    <img src="files/o-1.png" alt="1" />
                    <img src="files/o-2.png" alt="1" />
                    <img src="files/o-3.png" alt="1" />
                    <img src="files/o-4.png" alt="1" />
                    <img src="files/o-5.png" alt="1" />
                </div>
            </div>
        </div>

        <div class="delivery" id="e">
            <div class="delivery__title h1">Доставка и оплата</div>
            <div class="wrapper flex">
                <div class="delivery__item">
                    <div class="delivery__img">
                        <img src="files/i-1.png" alt="1" />
                    </div>
                    <div class="delivery__name"><span>Доставка почтой</span> в течении 1 - 10 рабочих дней по всей России в зависимости от региона</div>
                </div>
                <div class="delivery__item">
                    <div class="delivery__img">
                        <img src="files/i-2.png" alt="1" />
                    </div>
                    <div class="delivery__name"><span>Никаких предоплат!</span> Оплата заказов осуществляется по факту получения товара</div>
                </div>
                <div class="delivery__item">
                    <div class="delivery__img">
                        <img src="files/i-3.png" alt="1" />
                    </div>
                    <div class="delivery__name">Перед отправкой все товары проходят <span>тщательную проверку</span> на предмет брака</div>
                </div>
            </div>
        </div>
        <div class="banner banner--bottom" id="call">
            <div class="wrapper">
                <div class="banner__logo"><img src="files/logo.png" alt="Logo" /></div>
                <div class="banner__uptitle">Тотальна распродажа</div>
                <div class="banner__title">
                    Преобразите свой образ <br />
                    с красивыми стильными <br />
                    туниками 
                </div>
				 <img class="mob-img" src="files/bg-mob.jpg" alt="Sale" /> 
				<span style="color: red;font-size: 24px;font-weight: 900;padding-top: 12px;">1+1=3 - вместе дешевле!</span>
                <div class="banner__subtitle">
                    Мы перезвоним вам в <br />
                    течении 15 минут
                </div>
                <div class="banner__box flex">
                    <form class="banner__form" action="send.php" method="post" autocomplete="on">

                        <input type="text" class="banner__input" name="name" placeholder="Введите ваше имя" autocomplete="name" required>
                        <input type="tel" class="banner__input" name="phone" placeholder="Введите ваш телефон" autocomplete="tel" required>
                        <button class="btn">Заказать со скидкой</button>
                    </form>
                    <img class="banner__sale" src="files/sale.png" alt="Sale" />
                </div>
            </div>
        </div>
        <div class="garant" id="f">
            <div class="garant__title h1">гарантии</div>
            <div class="wrapper flex">
                <div class="garant__item">
                    <div class="garant__img">
                        <img src="files/g-1.png" alt="1" />
                    </div>
                    <div class="garant__name">Оплата при получении</div>
                    <div class="garant__subtitle">
                        Мы не берем с вас предоплату. Оплата заказа осуществляется при получении.
                    </div>
                </div>
                <div class="garant__item">
                    <div class="garant__img">
                        <img src="files/g-2.png" alt="1" />
                    </div>
                    <div class="garant__name">Гарантия на товар</div>
                    <div class="garant__subtitle">
                        Перед отправкой товары проходят 100% проверку.
                    </div>
                </div>
                <div class="garant__item">
                    <div class="garant__img">
                        <img src="files/g-3.png" alt="1" />
                    </div>
                    <div class="garant__name">Возврат денег</div>
                    <div class="garant__subtitle">
                        Свяжитесь с нами и мы решим ваш вопрос
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="wrapper">
                <div class="footer__text">
                    <p>ООО "Удачная покупка" ОГРН: 1157847017580 ИНН: 7839023851</p>
                    <p>г.Москва, Славы, 98, Торговый центр "Весна"</p>

                    <p class="conf-link doclinks">
                        <a class="nav-link" href="politics.php">Политика конфиденциальности </a>
                    </p>

                </div>
            </div>
        </footer>
        <script src="files/libs.min.js"></script>
        <script src="files/main.min.js"></script>
        <style>
            .form-control{
            	  border-style: solid;
                   border-width: 1px;
                   margin-bottom: 15px;
                   text-align: center;
                   border-color: rgb(0, 0, 0);
                   border-radius: 30px;
                   background-color: rgb(255, 255, 255);
                   width: 340px;
                   height: 66px;
                   @media (max-width: 768px) {
                       width: 300px;
                       height: 50px;
                   }
               }
            }
        </style>
	<script>
$(document).ready(function(){
    $('form').submit(function(){
        $(this).find('input[type=submit], button[type=submit]').prop('disabled', true);
    });
});
</script>
    </body>
</html>
