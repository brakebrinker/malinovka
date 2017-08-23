<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" integrity="sha256-SOuLUArmo4YXtXONKz+uxIGSKneCJG4x0nVcA0pFzV0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
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
	jQuery(document).ready(function($) {
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


		setDataIntoForm();
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
			setDataIntoForm();
		});
		$('.buy').on('click', function() {
			setDataIntoForm();
		});

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
			var thisRadio = $('.products-tabs__items.current input[type="radio"]');
			if (thisRadio.attr('checked')) {
				$('.price').html(thisRadio.attr('data-price') + 'р');
				$('input[name="price"]').val(thisRadio.attr('data-price') + 'р');
			}

			$('.form-header').html($('.tab-link.current span').html());

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