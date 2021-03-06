

$(document).ready(function(){

	$('.dd-burger').click(function(){
		$('.mobile-menu').slideToggle(500);
	});

	new WOW().init();

	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('href');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$('#mask').fadeTo("slow",0.8); 
		var winH = $(window).height();
		var winW = $(window).width();
		posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
		$(id).css('top',  posTop + 50);
		$(id).css('left', winW/2-$(id).width()/2);
		$('html, body').css("overflow-y", "hidden");
		$(id).fadeIn(500); 
	});
	$('.window .dd-close').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();
		$('.window').hide();
		$('html, body').removeAttr("style");
	}); 

	$('#mask, .an-exit__krest').click(function () {
		$('#mask').hide();
		$('.window').hide();
		$('html, body').removeAttr("style");
	}); 



	$(".form").submit(function() { 
		var tel = $(this).find('input[name="phone"]');
		var empty = false;
		if (tel.val() == ""){
			empty = true;
		}
		if (empty == true){
			tel.addClass("error-input");
			tel.focus();
		}else{
			var form_data = $(this).serialize(); 
			$.ajax({
				type: "POST", 
				url: "/sendmessage.php", 
				data: form_data,
				success: function() {
					cleanTnanks(this);
				}
			});
		}
		return false;
	});
	function cleanTnanks(form){
		$('input[type="text"]').removeClass("error-input");
		$("input[type=text], textarea").val("");
		$('.window, #mask').hide();
		$('a[href=#thanks]').trigger('click');
	};

	/* Mobile-menu
	========================*/
	$('.burg_hover').click(function(){
		$('.main-menu').slideToggle(500);
	});	

	


    /* Аккордеон
    =========================*/

    $(".js-faq-tittle").click(function(e){
    	e.preventDefault();
    	var $this = $(this);
    	answerId = $this.attr("href");

    	if( !$this.hasClass("active_ak")){
    		$(".js-faq-content").slideUp();
    		$(".js-faq-tittle").removeClass("active_ak");
    	}

    	$this.toggleClass("active_ak"); 
    	$(answerId).slideToggle();

    });
    $(".js-faq-tittle:first").click();

/* Наверх
=========================*/
$(window).scroll(function() {
	if($(this).scrollTop() != 0) {
		$('#toTop').fadeIn();
	} else {
		$('#toTop').fadeOut();
	}
});
$('#toTop').click(function() {
	$('body,html').animate({scrollTop:0},800);
});

/* Якоря
=======================*/
$("#js-nav a, .dd-button a").click(function(e){
	e.preventDefault();
	var currentBlock = $(this).attr("href");
	currentBlockoffset = $(currentBlock).offset().top;
	$("html, body").animate({
		scrollTop: currentBlockoffset
	}, 500);
});

});


