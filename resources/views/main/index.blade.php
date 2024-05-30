@extends('main.master')
@section('content')
<section class="sale">
    <div class="container">
        <div class="sale__inner">
            <div class="sale__card">
                <div class="sale__content-wrapper">
                    <div class="sale__price-container">
                        <svg class="icon sale-red_fire-icon"><use xlink:href="./img/sprites.svg#icon-red_fire"></use></svg>
                        <span class="sale__price-current">$12.56</span>
                        <span class="sale__price-before">$15.56</span>
                    </div>
                    <h2 class="sale__title">SEEDRA Basil Seeds for Indoor and Outdoor Planting</h2>
                    <span class="sale__description">Be sure of our quality - the freshest batches of this season. Non-GMO, Heirloom - our seeds were tested and have the best germination ratings. Your easy growing experience is our guarantee</span>
                    <div class="sale__btns-container">
                        <button class="sale__btn-add js-addToCart-btn" type="button">Add to card</button>
                        <button class="sale__btn-discover js-discover-btn" type="button">Discover</button>
                    </div>
                </div>
                <div class="sale__images-container">
                    <img src="./img/leafs_sale-left.png" alt="green_leafs" class="sale__left_leafs-img">
                    <img src="./img/sale_seeds.png" alt="sale_seeds" class="sale__seeds-img">
                    <img src="./img/leafs_sale-right.png" alt="green_leafs" class="sale__right_leafs-img">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seeds">
    <div class="container">
        <div class="seeds__inner">
            <div class="seeds__icon-container">
                <svg class="icon seeds__left"><use xlink:href="./img/sprites.svg#icon-seeds_left"></use></svg>
                <svg class="icon seeds__right"><use xlink:href="./img/sprites.svg#icon-seeds_right"></use></svg>
            </div>
            <div class="seeds__text-container">
                <h3 class="seeds__title">We sell seeds</h3>
                <span class="seeds__description">that always sprout and gardening supplies which never break</span>
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <div class="products__inner">
            <div class="products__welcome-container">
                <h3 class="products__title">Our products.</h3>
                <button class="products__btn-all"><span>View all (12)</span></button>
            </div>

            <div class="swiper products__slider-types">
                <ul class="swiper-wrapper products__wrapper-types">
                  <!-- Slides -->
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="all"><svg class="icon products__type-svg"><use xlink:href="./img/sprites.svg#icon-green-leaf"></use></svg><span>All</span></button>
                    </div>
                    </li>
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="bundles"><svg class="icon products__type-svg bundle-svg"><use xlink:href="./img/sprites.svg#icon-bundles"></use></svg><span>Bundles</span></button>
                    </div>
                  </li>
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="herbs"><svg class="icon products__type-svg"><use xlink:href="./img/sprites.svg#icon-latuce"></use></svg><span>Herbs</span></button>
                    </div>
                  </li>
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="vegetables"><svg class="icon products__type-svg"><use xlink:href="./img/sprites.svg#icon-tomato"></use></svg><span>Vegetables</span></button>
                    </div>
                  </li>
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="fruits"><svg class="icon products__type-svg"><use xlink:href="./img/sprites.svg#icon-strawberry"></use></svg><span>Fruits</span></button>
                    </div>
                  </li>
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="supplies"> <svg class="icon products__type-svg"><use xlink:href="./img/sprites.svg#icon-garden_tool"></use></svg><span>Supplies</span></button>
                    </div>
                  </li>
                  <li class="swiper-slide products__wrapper-slide">
                    <div class="products__types_slide-container">
                        <button class="products__type-btn" type="button" data-type="flowers"><svg class="icon products__type-svg"><use xlink:href="./img/sprites.svg#icon-flower"></use></svg><span>Flowers</span></button>
                    </div>
                  </li>
                </ul>
            </div>
            <div class="products__dropdowns-container">
                <ul class="products__dropdown products__dropdown--vegetables">
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">ALL VEGETABLES</a></li>
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">CUCUMBER</a></li>
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">ONION</a></li>
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">GARLIC</a></li>
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">TOMATOES</a></li>
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">CARROT</a></li>
                    <li class="products__dropdown-item"><a href="#" class="products__dropdown-link">CORN</a></li>
                </ul>
            </div>
        <div class="swiper products__slider-goods">
                <ul class="swiper-wrapper products__wrapper-goods">
                    <li class="swiper-slide products__slide-goods products__good-card">
                        <button class="products__like-btn">
                            <svg class="icon good-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                        </button>
                        <img src="./img/good_cilantro.jpg" alt="clintaro_seeds" class="products__good-img" loading="lazy">
                         <div class="products__grade-container">
                            <div class="products__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <span class="products__grade-count">(123)</span>
                        </div>
                        <h3 class="products__good-title">Seedra Cilantro Seeds for Planting Indoor and Outdoor</h3>

                        <div class="products__price-container">
                            <span class="products__good-price">$12.56</span>

                            <button class="products__cart-btn" type="button">
                                <svg class="icon good-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                            </button>
                        </div>
                    </li>
                    <li class="swiper-slide products__slide-goods products__good-card">
                        <button class="products__like-btn">
                            <svg class="icon good-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                        </button>
                        <img src="./img/good_corn.jpg" alt="clintaro_seeds" class="products__good-img" loading="lazy">
                        <div class="products__grade-container">
                            <div class="products__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <span class="products__grade-count">(123)</span>
                        </div>
                        <h3 class="products__good-title">Seedra Cilantro Seeds for Planting Indoor and Outdoor</h3>

                        <div class="products__price-container">
                            <span class="products__good-price">$12.56</span>

                            <button class="products__cart-btn" type="button">
                                <svg class="icon good-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                            </button>
                        </div>
                    </li>
                    <li class="swiper-slide products__slide-goods products__good-card">
                        <button class="products__like-btn">
                            <svg class="icon good-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                        </button>
                        <img src="./img/good_spinach.jpg" alt="clintaro_seeds" class="products__good-img" loading="lazy">
                        <div class="products__grade-container">
                            <div class="products__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <span class="products__grade-count">(123)</span>
                        </div>
                        <h3 class="products__good-title">Seedra Cilantro Seeds for Planting Indoor and Outdoor</h3>

                        <div class="products__price-container">
                            <span class="products__good-price">$12.56</span>

                            <button class="products__cart-btn" type="button">
                                <svg class="icon good-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                            </button>
                        </div>
                    </li>
                    <li class="swiper-slide products__slide-goods products__good-card">
                        <button class="products__like-btn">
                            <svg class="icon good-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                        </button>
                        <img src="./img/good_cilantro.jpg" alt="clintaro_seeds" class="products__good-img" loading="lazy">
                        <div class="products__grade-container">
                            <div class="products__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <span class="products__grade-count">(123)</span>
                        </div>
                        <h3 class="products__good-title">Seedra Cilantro Seeds for Planting Indoor and Outdoor</h3>

                        <div class="products__price-container">
                            <span class="products__good-price">$12.56</span>

                            <button class="products__cart-btn" type="button">
                                <svg class="icon good-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                            </button>
                        </div>
                    </li>
                    <li class="swiper-slide products__slide-goods products__good-card products__sale-card">
                        <button class="products__like-btn">
                            <svg class="icon good-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                        </button>
                        <img src="./img/good_corn.jpg" alt="clintaro_seeds" class="products__good-img" loading="lazy">
                        <div class="products__grade-container">
                            <div class="products__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <span class="products__grade-count">(123)</span>
                        </div>
                        <h3 class="products__good-title">Seedra Cilantro Seeds for Planting Indoor and Outdoor</h3>

                        <div class="products__price-container">
                            <div class="products__sale-price-container">
                                <svg class="icon products-red_fire-icon"><use xlink:href="./img/sprites.svg#icon-red_fire"></use></svg>
                                <span class="products__good-price">$12.56</span>
                                <span class="products__good-oldPrice">$15.56</span>
                            </div>

                            <button class="products__cart-btn" type="button">
                                <svg class="icon good-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                            </button>
                        </div>
                    </li>
                    <li class="swiper-slide products__slide-goods products__good-card">
                        <button class="products__like-btn">
                            <svg class="icon good-heart-icon"><use xlink:href="./img/sprites.svg#icon-heart"></use></svg>
                        </button>
                        <img src="./img/good_spinach.jpg" alt="clintaro_seeds" class="products__good-img" loading="lazy">
                        <div class="products__grade-container">
                            <div class="products__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <span class="products__grade-count">(123)</span>
                        </div>
                        <h3 class="products__good-title">Seedra Cilantro Seeds for Planting Indoor and Outdoor</h3>

                        <div class="products__price-container">
                            <span class="products__good-price">$12.56</span>

                            <button class="products__cart-btn" type="button">
                                <svg class="icon good-cart-icon"><use xlink:href="./img/sprites.svg#icon-cart"></use></svg>
                            </button>
                        </div>
                    </li>
                </ul>        
            </div> 
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="blog__inner">
            <div class="blog__welcome-container">
                <h3>Our blog.</h3>
                <button class="blog__btn"><span>Go to our blog</span></button>
            </div>

            <div class="swiper blog__slider">
                <ul class="swiper-wrapper blog__slider-wrapper">
                    <li class="swiper-slide blog__slide">
                        <div class="blog__slide-card green-card">
                            <div class="blog__content-wrapper">
                                <div class="blog__datatime-container">
                                    <svg class="icon blog-clock-icon"><use xlink:href="./img/sprites.svg#icon-clock"></use></svg>
                                    <span class="blog__datatime">12.09.2021</span>
                                </div>
                                <div class="blog__content-container">
                                    <h2 class="blog__title">How to plant spinach correctly in winter</h2>
                                    <p class="blog__description">In most areas, successive sowing can be done from early spring until early winter, but more often during hotter months...</p>
                                    <button class="blog__btn-more" type="button"><a href="#" class="blog__link-more">Read</a></button>
                                </div>
                            </div>

                            <img src="./img/spinach.png" alt="spinach" class="blog__img spinach-img" loading="lazy">
                        </div>
                    </li>
                    <li class="swiper-slide blog__slide">
                        <div class="blog__slide-card">
                            <div class="blog__content-wrapper">
                                <div class="blog__datatime-container">
                                    <svg class="icon blog-clock-icon"><use xlink:href="./img/sprites.svg#icon-clock"></use></svg>
                                    <span class="blog__datatime">12.09.2021</span>
                                </div>
                                <div class="blog__content-container">
                                    <h2 class="blog__title">How to plant spinach correctly in winter</h2>
                                    <p class="blog__description">In most areas, successive sowing can be done from early spring until early winter, but more often during hotter months...</p>
                                    <button class="blog__btn-more" type="button"><a href="#" class="blog__link-more">Read</a></button>
                                </div>
                            </div>

                            <img src="./img/female_gardener.png" alt="female_gardener" class="blog__img gardener-img" loading="lazy">
                        </div>
                    </li>
                    <li class="swiper-slide blog__slide">
                        <div class="blog__slide-card">
                            <div class="blog__content-wrapper">
                                <div class="blog__datatime-container">
                                    <svg class="icon blog-clock-icon"><use xlink:href="./img/sprites.svg#icon-clock"></use></svg>
                                    <span class="blog__datatime">12.09.2021</span>
                                </div>
                                <div class="blog__content-container">
                                    <h2 class="blog__title">How to plant spinach correctly in winter</h2>
                                    <p class="blog__description">In most areas, successive sowing can be done from early spring until early winter, but more often during hotter months...</p>
                                    <button class="blog__btn-more" type="button"><a href="#" class="blog__link-more">Read</a></button>
                                </div>
                            </div>

                            <img src="./img/strawberry.png" alt="strawberry" class="blog__img strawberry-img" loading="lazy">
                        </div>
                    </li>
                    <li class="swiper-slide blog__slide">
                        <div class="blog__slide-card">
                            <div class="blog__contnet-wrapper">
                                <div class="blog__datatime-container">
                                    <svg class="icon blog-clock-icon"><use xlink:href="./img/sprites.svg#icon-clock"></use></svg>
                                    <span class="blog__datatime">12.09.2021</span>
                                </div>
                                <div class="blog__content-container">
                                    <h2 class="blog__title">How to plant spinach correctly in winter</h2>
                                    <p class="blog__description">In most areas, successive sowing can be done from early spring until early winter, but more often during hotter months...</p>
                                    <button class="blog__btn-more" type="button"><a href="#" class="blog__link-more">Read</a></button>
                                </div>
                            </div>

                            <img src="./img/strawberry.png" alt="strawberry" class="blog__img strawberry-img" loading="lazy">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <h3 class="reviews__title">What out clients say</h3>

            <div class="swiper reviews__slider">
                <ul class="swiper-wrapper reviews__slider-wrapper">
                    <li class="swiper-slide reviews__slide">
                        <div class="reviews__slide-card">
                            <div class="reviews__client-container">
                                <img src="./img/client.png" alt="client" class="reviews__client-img" loading="lazy">

                                <div class="reviews__client-info">
                                    <h3 class="reviews__client-name">Carla Samantoes-Diego</h3>
                                    <span class="reviews__date">12.09.2021</span>
                                </div>
                            </div>

                            <div class="reviews__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <p class="reviews__info">SEEDRA Spinach Seeds - contains 600 seeds in 2 Packs and professional instructions created by PhD Helga George Be sure of our quality - the freshest batches of this season. Non-GMO, Heirloom - our seeds were tested and have the best germination ratings.</p>
                        </div>
                    </li>
                    <li class="swiper-slide reviews__slide">
                        <div class="reviews__slide-card">
                            <div class="reviews__client-container">
                                <img src="./img/client.png" alt="client" class="reviews__client-img" loading="lazy">

                                <div class="reviews__client-info">
                                    <h3 class="reviews__client-name">Carla Samantoes-Diego</h3>
                                    <span class="reviews__date">12.09.2021</span>
                                </div>
                            </div>

                            <div class="reviews__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <p class="reviews__info">SEEDRA Spinach Seeds - contains 600 seeds in 2 Packs and professional instructions created by PhD Helga George Be sure of our quality - the freshest batches of this season. Non-GMO, Heirloom - our seeds were tested and have the best germination ratings.</p>
                        </div>
                    </li>
                    <li class="swiper-slide reviews__slide">
                        <div class="reviews__slide-card">
                            <div class="reviews__client-container">
                                <img src="./img/client.png" alt="client" class="reviews__client-img" loading="lazy">

                                <div class="reviews__client-info">
                                    <h3 class="reviews__client-name">Carla Samantoes-Diego</h3>
                                    <span class="reviews__date">12.09.2021</span>
                                </div>
                            </div>

                            <div class="reviews__stars">
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-full-star-icon"><use xlink:href="./img/sprites.svg#icon-star"></use></svg>
                                <svg class="icon good-half-star-icon"><use xlink:href="./img/sprites.svg#icon-star-half"></use></svg>
                            </div>

                            <p class="reviews__info">SEEDRA Spinach Seeds - contains 600 seeds in 2 Packs and professional instructions created by PhD Helga George Be sure of our quality - the freshest batches of this season. Non-GMO, Heirloom - our seeds were tested and have the best germination ratings.</p>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination reviews__pagination"></div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__content">
                <h3 class="about__title">Seedra helps to grow fast and efficiant</h3>
                <p class="about__text">SEEDRA Spinach Seeds - contains 600 seeds in 2 Packs and professional instructions created by PhD Helga George</p>

                <p class="about__text">Be sure of our quality - the freshest batches of this season. Non-GMO, Heirloom - our seeds were tested and have the best germination ratings.Your easy growing experience is our guarantee Spinach commom culinary uses: salads, soups, smoothies, lasagne, pizza, pies, risotto, and more</p>
            
                <p class="about__text">Proudly sourced in the USA - our garden seeds are grown, harvested, and packaged in the USA. We support local farmers and are happy to produce this American-made product</p>
            </div>

            <img src="./img/female_farmer.png" alt="female_farmer" class="about__img" loading="lazy">
        </div>
    </div>
</section>
@endsection