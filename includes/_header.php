<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="assets/css/main.css?v<?=time()?>">
</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <div class="header__wrapper">
                <div class="header-left">
                    <button class="header__menu" type="button" data-modal="#modal-mainmenu">
                        <figure class="icon__wrapper">
                            <svg class="icon icon-hamburger">
                                <use xlink:href="#icon-hamburger"></use>
                            </svg>
                        </figure> 
                    </button>
                </div>
                <a href="index.php" class="header__logo">berlika</a>
                <div class="header__right">
                    <figure class="icon__wrapper">
                        <svg class="icon icon-user">
                            <use xlink:href="#icon-user"></use>
                        </svg>
                    </figure>
                    <button type="button" data-modal="#modal-search">
                        <figure class="icon__wrapper">
                            <svg class="icon icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </figure>
                    </button>
                    <button type="button" data-modal="#modal-cart">
                        <figure class="icon__wrapper">
                            <svg class="icon icon-basket">
                                <use xlink:href="#icon-basket"></use>
                            </svg>
                        </figure>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="modal modal--left" id="modal-mainmenu">
        <div class="modal__wrapper">
            <div class="modal__content modal__content--dark">
                <div class="modal__header">
                    <div class="modal__header__left"><div class="modal__header__title">Menu</div></div>
                    <div class=""></div>
                    <div class="modal__header__right">
                        <button type="button" class="modal__close" data-modal-close>
                            <figure class="icon__wrapper">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </figure>
                        </button>
                    </div>
                </div>
                <div class="modal__body">
                    <nav class="main-menu">
                        <ul>
                            <li class="main-menu__dropdown">
                                <button class="main-menu__item">Pages</button>
                                <ul class="main-menu__dropdown-menu">
                                    <li><a href="index.php">Homepage</a></li>
                                    <li><a href="collection.php">Collection</a></li>
                                    <li><a href="product-detail.php">Product Detail</a></li>
                                </ul>
                            </li>
                            <li class="main-menu__dropdown">
                                <button class="main-menu__item">ACCESSORY CATEGORIES</button>
                                <ul class="main-menu__dropdown-menu">
                                    <li><a href="#">Front Lips</a></li>
                                    <li><a href="#">Rear Spoilers</a></li>
                                    <li><a href="#">Side Skirts</a></li>
                                    <li><a href="#">Mirror Covers</a></li>
                                    <li><a href="#">Roof Spoilers</a></li>
                                </ul>
                            </li>
                            <li class="main-menu__dropdown">
                                <button class="main-menu__item">BRANDS</button>
                                <ul class="main-menu__dropdown-menu">
                                    <li class="main-menu__dropdown">
                                        <button class="main-menu__item">Alfa Romeo</button>
                                        <ul class="main-menu__dropdown-menu">
                                            <li><a href="#">Giulia</a></li>
                                            <li><a href="#">Quadrifoglio</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Audi</a></li>
                                    <li><a href="#">Bentley</a></li>
                                    <li><a href="#">Mercedes-Benz</a></li>
                                    <li><a href="#">BMW</a></li>
                                </ul>
                            </li>
                            <li class="main-menu__dropdown">
                                <button class="main-menu__item">COMPANY</button>
                                <ul class="main-menu__dropdown-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Guarantees</a></li>
                                    <li><a href="#">Return & Refund Policy</a></li>
                                    <li><a href="#">Price Match</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="modal__footer">
                    <div class="social-media">
                        <a href="#">
                            <figure class="icon__wrapper">
                                <svg class="icon icon-instagram">
                                    <use xlink:href="#icon-instagram"></use>
                                </svg>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal--right" id="modal-search">
        <div class="modal__wrapper">
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__header__left"></div>
                    <div class="modal__header__title">SEARCH OUR SITE</div>
                    <div class="modal__header__right">
                        <button type="button" class="modal__close" data-modal-close>
                            <figure class="icon__wrapper">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </figure>
                        </button>
                    </div>
                </div>
                <div class="modal__body">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form__control" placeholder="Search for products">
                            <button type="submit" class="input-group__text">
                                <figure class="icon__wrapper">
                                    <svg class="icon icon-search">
                                        <use xlink:href="#icon-search"></use>
                                    </svg>
                                </figure>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal__footer">
                    <button type="button" class="btn btn__primary" data-modal-close>Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal--right" id="modal-cart">
        <div class="modal__wrapper">
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__header__left"></div>
                    <div class="modal__header__title">Cart</div>
                    <div class="modal__header__right">
                        <button type="button" class="modal__close" data-modal-close>
                            <figure class="icon__wrapper">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </figure>
                        </button>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="cart-item">
                        <div class="cart-item__image">
                            <img src="assets/img/product1.png" alt="">
                        </div>
                        <div class="cart-item__content">
                            <div>
                                <div class="cart-item__title">Draga Black</div>
                                <div class="cart-item__price">$125.00</div>
                            </div>
                            <div>
                                <div class="input-group">
                                    <button type="button" class="input-group__text js-minus">-</button>
                                    <input type="number" class="form__control" value="1" min="1">
                                    <button type="button" class="input-group__text js-plus">+</button>
                                </div>
                                <div class="cart-item__remove">Remove</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__footer__text">Shipping & taxes calculated at checkout</div>
                    <button type="submit" class="btn btn__cart ">Checkout - $480.00 CAD</button>
                </div>
            </div>
        </div>
    </div>
    <main>