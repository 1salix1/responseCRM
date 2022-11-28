//$(function(){
	
	/*---------------------------------------------------------------------------------------------
		Toggle class "show-menu" in header.main-menu to animate hamburger icon
	---------------------------------------------------------------------------------------------*/
	function fnHeaderMainMenu(){
		$('#mainMenuToggler').click(function() {
			$('body').toggleClass('show-main-menu');
		});
	}
	
	
	$('.animate-border-width .form-control').on('click', function() { 
	
		if($('.animate-border-width').hasClass('active')){
			$('.animate-border-width').removeClass('active');
		}
		$(this).parents('.animate-border-width').toggleClass('active');
		
	});
	
	
	/*---------------------------------------------------------------------------------------------
		IF click outside actions
	---------------------------------------------------------------------------------------------*/
	$(document).on('click', function(e) {
		var container1 = $('#mainMenuToggler');
		if (!container1.is(e.target) && container1.has(e.target).length === 0) {
			$('body').removeClass('show-main-menu');
		}
		var container2 = $(".animate-border-width");
		if (!container2.is(e.target) && container2.has(e.target).length === 0) {
			$('.animate-border-width').removeClass('active');
		}
	});
	$(document).on("click","a", function (event) {
		if ($(this).attr('href')[0]=='#')
		{
			event.preventDefault();
			var id  = $(this).attr('href'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
		}
	});
var twitts_count=2;
$( ".all_twitts" ).load("twitts.php");


setTimeout(function () {
	var iframe = $( ".all_twitts" ).find('iframe').contents();
	var count=0;
	if (iframe.length!=0){
		$( ".twitter__scroll-area" ).html("");
	}
	iframe.find('.timeline-TweetList-tweet').each(function(){

		if(count==twitts_count){
			return false;
		}
		count++;
		$( ".twitter__scroll-area" ).html($( ".twitter__scroll-area" ).html()+
			'<div class="twitter__post">'+
			'<div class="twitter__logo-title">'+
			'<div class="twitter__logo"></div>'+
			'<div class="twitter__title">'+
			'<a target="_blank" href="https://twitter.com/ResponseCRMllc">ResponseCRM</a>'+
			'<h5>@ResponseCRMllc</h5>'+
			'</div>'+
			'<div class="twitter__logotype"></div>'+
			'</div>'+
			'<div class="twitter__text">'+
			$(this).find('.timeline-Tweet-text').html()+
			'</div>'+
			'<div class="twitter__icons-date">'+
			'<div class="twitter__icons">'+
			'<a target="_blank" href="'+$(this).find(".TweetAction--heart").attr("href")+'"></a>'+
			'<a target="_blank" href="'+$(this).find(".TweetAction--share").attr("href")+'"></a>'+
			'</div>'+
			'<div class="twitter__date">'+
			$(this).find('.timeline-Tweet-metadata').html()+
			'</div>'+
			'</div>'+
			'</div>'
		);
	});
}, 3000);



	fnHeaderMainMenu();
	
		
//});//End All	