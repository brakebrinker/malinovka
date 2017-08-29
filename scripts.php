<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" integrity="sha256-SOuLUArmo4YXtXONKz+uxIGSKneCJG4x0nVcA0pFzV0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.meanmenu.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider-self').slick({
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
		});

		$('.characteristics__slider').slick({
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			dots: true
		});
	});
</script>
<script>
	$(document).ready(function(){
		
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		})

	})
</script>
<script>
	jQuery(document).ready(function($) {
		$('.open-popup-link').magnificPopup({
		  type:'inline',
		  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});

		$('.popup-img').magnificPopup({
		  type: 'image'
		  // other options
		});
	});
</script>
<script>
	jQuery(document).ready(function ($) {
		$('header nav').meanmenu();
	});
</script>
<script>
	jQuery(document).ready(function($) {

		$('.open-popup-link').on('click', function() {
			$('#results').fadeOut("fast");
			$('.form-container form').fadeIn("fast");
			$('.form-container .form-header').fadeIn("fast");
		});

		//position slider navigation

		var ulWidth = $('.slick-dots').width() + 30;
		var containerWidth = $('.characteristics__slider').width();

		var leftPadding = containerWidth / 2 - ulWidth / 2;

		$('.slick-dots').css("left", leftPadding);

		//arrows
		$('.characteristics__container .slick-prev').css("left", leftPadding - 25);
		$('.characteristics__container .slick-next').css("left", leftPadding + ulWidth + 13);

		//change radio on page kapitan
		$(".how-work__content-radio input").on('change', function(){
			if ($(this).attr('checked')) {
				$('.how-work__content-text').html($(this).val());
			}
		});

		//change price and form data
		$('.form-choice input[type="radio"]').on('change', function() {
			changePrice($(this), $(this).index());
		});
		$('.choice-buy input[type="radio"]').on('change', function() {
			if ($(this).attr('checked')) {
				$('.price').html($(this).attr('data-price') + 'р');
				$('input[name="price"]').val($(this).attr('data-price') + 'р');
			}
		});
		//tab click update data
		$('.tab-link').on('click', function() {
			var thisRadio = $('.products-tabs__items').find('#' + $(this).attr('data-tab')).find('input[type="radio"]');
			if (thisRadio.attr('checked')) {
				$('.price').html(thisRadio.attr('data-price') + 'р');
				$('input[name="price"]').val(thisRadio.attr('data-price') + 'р');
			}
			setDataIntoForm();
		});
		$('.buy').on('click', function() {
			setDataIntoForm();
		});
		setDataIntoForm();

		function changePrice(thisElem, ind) {
			var formBox;

			formBox = $('.choice-buy > *').eq(ind)

			formBox.attr('data-price', thisElem.attr('data-price'));
			formBox.val(thisElem.val());

			if (thisElem.attr('checked')) {
				$('.price').html(thisElem.attr('data-price') + 'р');
				$('input[name="price"]').val(thisElem.attr('data-price') + 'р');
			}
		}

		function setDataIntoForm() {

			$('.form-container form').fadeIn("fast");
			$('.form-container .form-header').fadeIn("fast");

			$('.form-header-product').html($('.tab-link.current span').html());
			$('.product #title').val('Заказ ' + $('.tab-link.current span').html());
			$('.product #price').val($('.tab-content.current .form-choice input:checked').attr('data-price') + 'р');
			$('.choice-buy .price').html($('.products-tabs__item.current .form-choice input:checked').attr('data-price') + 'р');

			var currentRadio = $('.products-tabs__item.current .form-choice').find('input[type="radio"]');
			var currentLabel = $('.products-tabs__item.current .form-choice').find('label');
			var formRadio = $('.choice-buy').find('input[type="radio"]');
			var formLabel = $('.choice-buy').find('label');

			for (var i = 0; i < currentRadio.length; i++) {
				if (currentRadio.eq(i).attr('checked')) {
					formRadio.eq(i).attr('checked', 'true');
				}
				formRadio.eq(i).attr('data-price', currentRadio.eq(i).attr('data-price'));
				formRadio.eq(i).val(currentRadio.eq(i).val());
				formLabel.eq(i).html(currentLabel.eq(i).html());
			}
		}

	});
</script>
<script>
	$(".form-send").submit(function() {
		var msg = $(this).serialize();
		$.ajax({
		  type: 'POST',
		  url: '/mail.php',
		  data: msg,
		  success: function(data) {
			// $('#results').html(data);
			// form-header
			$('.form-container form').fadeOut("fast");
			$('.form-container .form-header').fadeOut("fast");
			$('#results').fadeIn("fast").text('Спасибо за обращение, мы свяжемся с вами в течение рабочего дня!');
			setTimeout(function() { 
				$('#results').fadeOut("fast");
				$('.form-container form').fadeIn("fast");
				$('.form-container .form-header').fadeIn("fast");
			}, 10000);
			$.magnificPopup.open({
			  items: {
			    src: '.results-consult',
			    type: 'inline',
			    midClick: true,
			    closeBtnInside:true,
			  }
			});
			// alert("Ваше сообщение отпрвлено!");
		  },
		  error:  function(xhr, str) {
		  	$('.form-container form').fadeOut("fast");
		  	$('.form-container .form-header').fadeOut("fast");
		  	$('#results').fadeIn("fast").text('Возникла ошибка: ' + xhr.responseCode);
		  	setTimeout(function() { 
		  		$('#results').fadeOut("fast");
		  		$('.form-container form').fadeIn("fast");
		  		$('.form-container .form-header').fadeIn("fast");
		  	}, 10000);
		  	// alert("Ошибка!");
		  }
		});
		return false;
	});
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45762531 = new Ya.Metrika({
                    id:45762531,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45762531" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->