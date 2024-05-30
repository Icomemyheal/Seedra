<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/scss/main/index.scss', 'resources/js/main/script.js', 'resources/js/main/sliders.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seedra</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="header__logo-link" href="/">
                    <svg class="icon header-logo-icon"><use xlink:href="./img/sprites.svg#icon-logo"></use></svg>
                </a>

                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item">
                            <button class="header__heart-btn" type="button">
                                <svg class="icon header-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                            </button>
                        </li>
                        <li class="header__nav-item">
                            <button class="header__cart-btn" type="button">
                                <a href="#" class="header__nav-cart">
                                    <svg class="icon header-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                                </a>
                            </button>
                        </li>
                        <li class="header__nav-item">
                            <span class="header__menu-burger js-burger-btn"></span>
                        </li>
                    </ul>

                    <div class="header__nav-menu js-header-menu">
                        <form action="#" method="post" class="header__search-form">
                            <svg class="icon header-search-icon"><use xlink:href="./img/sprites.svg#icon-search"></use></svg>
                            <input type="text" class="header__input-search" placeholder="Search">
                        </form>
                        <ul class="header__menu-list">
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">All products</a>
                            </li>
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">Bundles</a>
                                <svg class="icon header-arrow-down-icon"><use xlink:href="./img/sprites.svg#icon-down-arrow"></use></svg>
                            </li>
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">Herbs</a>
                                <svg class="icon header-arrow-down-icon"><use xlink:href="./img/sprites.svg#icon-down-arrow"></use></svg>
                            </li>
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">Vegetables</a>
                                <svg class="icon header-arrow-down-icon"><use xlink:href="./img/sprites.svg#icon-down-arrow"></use></svg>

                                <ul class="header__dropdown-list">
                                    <li class="header__dropdown-item">
                                        <a href="#" class="header__dropdown-link">Cucumber</a>
                                    </li>
                                    <li class="header__dropdown-item">
                                        <a href="#" class="header__dropdown-link">Onion</a>
                                    </li>
                                    <li class="header__dropdown-item">
                                        <a href="#" class="header__dropdown-link">Garlic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">Fruits</a>
                                <svg class="icon header-arrow-down-icon"><use xlink:href="./img/sprites.svg#icon-down-arrow"></use></svg>
                            </li>
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">Supplies</a>
                                <svg class="icon header-arrow-down-icon"><use xlink:href="./img/sprites.svg#icon-down-arrow"></use></svg>
                            </li>
                            <li class="header__menu-item">
                                <a href="#" class="header__menu-link">Flowers</a>
                                <svg class="icon header-arrow-down-icon"><use xlink:href="./img/sprites.svg#icon-down-arrow"></use></svg>
                            </li>
                        </ul>
                        <ul class="header__faq-list">
                            <li class="header__faq-item">
                                <a href="#" class="header__faq-link">Our blog</a>
                                <svg class="icon header-arrow-right-icon"><use xlink:href="./img/sprites.svg#icon-arrow-right"></use></svg>
                            </li>
                            <li class="header__faq-item">
                                <a href="#" class="header__faq-link">About Seedra</a>
                                <svg class="icon header-arrow-right-icon"><use xlink:href="./img/sprites.svg#icon-arrow-right"></use></svg>
                            </li>
                            <li class="header__faq-item">
                                <a href="#" class="header__faq-link">Contacts</a>
                            </li>
                        </ul>
                        <ul class="header__socials-list">
                            <li class="header__socials-item">
                                <a href="#" class="header__socials-link">
                                    <svg class="icon header-instagram-icon"><use xlink:href="./img/sprites.svg#icon-instagram"></use></svg>
                                </a>
                            </li>
                            <li class="header__socials-item">
                                <a href="#" class="header__socials-link">
                                    <svg class="icon header-facebook-icon"><use xlink:href="./img/sprites.svg#icon-facebook"></use></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__top">
                    <a class="footer__logo-link" href="/">
                        <svg class="icon footer-logo-icon"><use xlink:href="./img/sprites.svg#icon-logo"></use></svg>
                    </a>
                    
                    <nav class="footer__nav">
                        <ul class="footer__nav-list">
                            <li class="footer__nav-item"><a href="#" class="footer__nav-link">ALL PRODUCTS</a></li>
                            <li class="footer__nav-item"><a href="#" class="footer__nav-link">ABOUT SEEDRA</a></li>
                            <li class="footer__nav-item"><a href="#" class="footer__nav-link">OUR BLOG</a></li>
                        </ul>
                        <ul class="footer__terms-list">
                            <li class="footer__nav-item"><a href="#" class="footer__nav-link">Terms&Conditions</a></li>
                            <li class="footer__nav-item"><a href="#" class="footer__nav-link">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="footer__bottom">
                    <ul class="footer__socials-list">
                        <li class="footer__socials-item">
                            <a href="#" class="footer__socials-link">
                                <svg class="icon footer-instagram-icon"><use xlink:href="./img/sprites.svg#icon-instagram"></use></svg>
                            </a>
                        </li>
                        <li class="footer__socials-item">
                            <a href="#" class="footer__socials-link">
                                <svg class="icon footer-instagram-icon"><use xlink:href="./img/sprites.svg#icon-facebook"></use></svg>
                            </a>
                        </li>
                    </ul>

                    <span class="footer__rights">All rights reserved</span>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/main/script.js"></script>
    <script src="./js/main/sliders.js"></script>
</body>
</html>