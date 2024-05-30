import Swiper from 'swiper';
import { Navigation, Pagination, EffectCoverflow} from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

if(!window.matchMedia('(min-width: 992px)').matches){
  const typesSlider = new Swiper('.products__slider-types', {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2,
    spaceBetween: 12,
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
    }
  });

  const goodsSlider = new Swiper('.products__slider-goods', {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,
    spaceBetween: 11,
    breakpoints: {
      768: {
        slidesPerView: 2,
      }
    }
  });

  const blogsSlider = new Swiper('.blog__slider', {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,
    spaceBetween: 11,
    breakpoints: {
      768: {
        slidesPerView: 2,
      }
    }
  });
}

document.addEventListener('DOMContentLoaded', function () {
  const reviewsSlider = new Swiper('.reviews__slider', {
    modules: [Pagination, EffectCoverflow],
    direction: 'horizontal',
    loop: false,
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 11,
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,

        pagination: {
          el: '.reviews__pagination',
          clickable: true,
        },
      },
    },
  });

  reviewsSlider.on('click', (swiper) => {
    const clickedSlide = swiper.clickedSlide;
    if (clickedSlide) {
      const clickedIndex = swiper.clickedIndex;
      swiper.slideTo(clickedIndex);
    }
  });
});