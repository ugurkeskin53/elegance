<?php include 'includes/_header.php'; ?>

<section class="toolbar">
    <div class="container">
        <div class="toolbar__wrapper">
            <div class="toolbar__info">
                <span>33</span> Products
            </div>
            <div class="toolbar__filter__wrapper">
                <button type="button" data-modal="#modal-filters" class="toolbar__filter__item">Filters</button>
                <div class="dropdown toolbar__filter__item">
                    <button type="button" class="dropdown-toggle">Sort By</button>
                    <ul class="dropdown-menu dropend">
                        <li><a class="dropdown-item" href="#">Featured</a></li>
                        <li><a class="dropdown-item" href="#">Top seller</a></li>
                        <li><a class="dropdown-item" href="#">Alphabetically, A-Z</a></li>
                        <li><a class="dropdown-item" href="#">Alphabetically, Z-A</a></li>
                        <li><a class="dropdown-item" href="#">Price, Low to High</a></li>
                        <li><a class="dropdown-item" href="#">Price, High to Low</a></li>
                        <li><a class="dropdown-item" href="#">History, Old to New</a></li>
                        <li><a class="dropdown-item" href="#">History, New to Old</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal modal--right" id="modal-filters">
    <div class="modal__wrapper">
        <div class="modal__content">
            <div class="modal__header">
                <div class="modal__header__left"></div>
                <div class="modal__header__title">Filters</div>
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
                <div class="sort">
                    <div class="sort__title">Stok durumu</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch-1">
                        <label class="form-check-label" for="switch-1">Stokta (33)</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch-2">
                        <label class="form-check-label" for="switch-2">Stokta yok (0)</label>
                    </div>
                </div>
            </div>
            <div class="modal__footer">
                <button type="button" class="btn btn__primary">Apply</button>
            </div>
        </div>
    </div>
</div>
<section class="section__margin-bottom">
    <div class="container">
        <div class="section__title">EVENING DRESS</div>
        <div class="row">
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".2s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                        <figure class="icon__wrapper">
                            <svg class="icon icon-hearth">
                                <use xlink:href="#icon-hearth"></use>
                            </svg>
                        </figure>
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".4s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".6s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                        <figure class="icon__wrapper">
                            <svg class="icon icon-hearth">
                                <use xlink:href="#icon-hearth"></use>
                            </svg>
                        </figure>
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".8s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay="1s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay="1.2s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay="1.4s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".2s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".4s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".6s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".2s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".4s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".6s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".2s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".4s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".6s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".2s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".4s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="product-detail.php" class="product-box wow fadeIn" data-wow-delay=".6s">
                    <div class="product-box__image">
                        <img loading="lazy" src="assets/img/product1.png" alt="">
                    </div>
                    <div class="product-box__content product-box__content--text-left">
                        <div class="product-box__title">Draga Black</div>
                        <div class="product-box__price">$125.00</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collection__button">
            <a href="#" class="btn btn__primary">DISCOVER MORE</a>
        </div>
    </div>
</section>

<?php include 'includes/_footer.php'; ?>