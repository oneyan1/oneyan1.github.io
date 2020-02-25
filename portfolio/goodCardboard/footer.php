<section class="contacts ">
			<div class="map" id="map">
				
			</div>
			<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aff9b913c27c47d3359ab60437be3aa214d4dc227b3815df22abd386821298765&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=folse"></script> -->
			<div class="contacts-block">
				<div class="contacts-block__address contacts-block__text">
					<span class="contacts-block__title">
						Адрес офиса
					</span>
						г. Уфа, Проспект октября, 46
						<span class="contacts-block__title">
						Адрес склада
					</span>
						г. Уфа, ул. Майкопская, 65/2
				</div>
				<div class="contacts-block__phones contacts-block__text">
					<span class="contacts-block__title">
						Тел. отдела продаж:
					</span>
						8 (347) 271-54-28 <br>
						8 (937) 363-30-00
				</div>
				<div class="contacts-block__cta contacts-block__text">
					<button class="button btnModalActive">
						Заказать звонок
					</button>
				</div>
				<div class="contacts-block__mail contacts-block__text">
					<span class="contacts-block__title">
						Е-mail
					</span>
						urals.karton@gmail.com
				</div>
			</div>
		</section>


		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script> -->
		
		<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
		
		<script>

			$(document).ready(function(){
						$('.btnModalActive').on("click", function(){
								$('.overlay').fadeIn("slow");
						}); 
						$('.popup-close').on("click", function(){
							$('.overlay').fadeOut("slow");
						});
						$('.main-form').on("submit", function(event){
							event.preventDefault();
							$(".popup-form").html("<h1>Спасибо, скоро мы с вами свяжемся!</h1>");
						});
						$('.form-section').on("submit", function(event){
							event.preventDefault();
							$('.offer-form').html("<h1>Спасибо, скоро мы с вами свяжемся!</h1>");
						});
			});
		</script>
		<script src="slick/slick.min.js"></script>
		<script>
			$('.production-slider_top').slick({
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					asNavFor: '.production-slider_bottom'
			});
			$('.production-slider_bottom').slick({
					centerMode: true,
  			centerPadding: '60px',
					arrows: true,
					slidesToShow: 3,
					slidesToScroll: 1,
					responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ],
					prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
					nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>',
					asNavFor: '.production-slider_top'
			});
			$('.feedback-slider').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },

  ],
					prevArrow: '<div class="slider-arrow slider-arrow_feed slider-arrow_left-b"></div>',
					nextArrow: '<div class="slider-arrow slider-arrow_feed slider-arrow_right-b"></div>'
			});
		</script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<script>
			ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [54.752656, 56.002053],
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'img/icons/geomap.png',
            // Размеры метки.
            iconImageSize: [42, 42],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-21, -42]
        });

    myMap.geoObjects
        .add(myPlacemark);
    myMap.behaviors
    					.disable('scrollZoom'); 
});
		</script>
	</body>
</html>