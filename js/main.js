var pageApp = {
    'init':function(){
        var curApp = $('#app').attr('data-app');
        if (pageApp[curApp]) { pageApp[curApp](); }
    },
    'page-index':function(){
    	moduleApp.mainSLider();
    },
    'page-product':function(){
    	moduleApp.filterProductsRange();
    },
    'page-product-detail':function(){
    	moduleApp.productSLider();
    	$('a.gallery-product').fancybox();
    },
    'page-checkout':function(){
    	moduleApp.checkoutAccordion();
    }
}

var moduleApp = {
	'init':function(){
	},
	'searchDropdown':function(){
		$('.search-dropdown-title a').on('click', function(e){
			e.preventDefault();
			var dropdown = $('.js-search-dropdown');
			if (dropdown.is(':hidden')){
				dropdown.removeClass('close');
			} else {
				dropdown.addClass('close');
			}
		});
	},
	'mainSLider':function(){
		var mSlider = $('.js-slider-main');
		mSlider.bxSlider(
			{
				auto: true,
				mode: 'fade',
				controls: false,
				pager: false,
			}
		);
	},
	'productSLider':function(){
		var mSlider = $('.js-slider-product');
		mSlider.bxSlider(
			{
				auto: false,
				mode: 'fade',
				controls: true,
				pager: false,
			}
		);
	},
	'subscribeSlider':function(){
		var mSlider = $('.js-subscribe-slider');
		mSlider.bxSlider(
			{
				auto: true,
				mode: 'fade',
				controls: false,
				pager: true,
			}
		);
	},
	'filterProductsRange':function(){
		var minRange = parseFloat($('.js-filter-slider-range').attr('data-min')),
			maxRange = parseFloat($('.js-filter-slider-range').attr('data-max'));
		$('.js-filter-slider-range').slider({
			range: true,
			min: minRange,
			max: maxRange,
			values: [minRange, maxRange],
			slide: function(event, ui) {
				$('.js-min-range').val(ui.values[0]);
				$('.js-max-range').val(ui.values[1]);
			}
		});
		$('.js-min-range').val($('.js-filter-slider-range').slider('values', 0));
		$('.js-max-range').val($('.js-filter-slider-range').slider('values', 1));
	},
	'checkoutAccordion':function(){
		$('.js-checkout-accordion').accordion({
			header: "div.step-title",
			content: "div.step-desc",
			heightStyle: "content"
		});
	},
	'menuMobile':function(){
		$('.js-menu-mobile').on('click', function(e){
			e.preventDefault();
			var menu = $('.js-nav');
			if (menu.is(':hidden')){
				menu.show();
			} else {
				menu.hide();
			}
		});
	},
}

$(document).ready(function(){
	moduleApp.init();
	pageApp.init();

	/* --- search dropdown --- */
	moduleApp.searchDropdown();
	/* --- end --- */

	/* --- subscribe slider --- */
	moduleApp.subscribeSlider();
	/* --- end --- */

	/* --- menu mobile --- */
	moduleApp.menuMobile();
	/* --- end --- */
});