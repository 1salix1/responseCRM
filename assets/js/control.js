$(document).ready(() => {

  var twitts_count=2;



  $('.slick-layout').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
  });

  $('.platformSlider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
  });
  $('.events-layout').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    adaptiveHeight: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          arrows: true,
        }
      }
    ]
  });





  var src =$('.u-content__abstract').attr('src');
  $('.u-content__abstract').attr('src', src);


  $(document).on("click","a", function (event) {

    if ($(this).attr('href')==='#') {
      event.preventDefault();
      return;
    }
    if ($(this).attr('href')[0]=='#')
    {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1500);
    }
  });

  $('.header__has_submenu > a').click(function(event) {
    event.preventDefault();
  });

  $( ".all_twitts" ).load("twitts.php");


  var timerId = setInterval(function () {
    //console.log($(".all_twitts" ).html().length);
    if (typeof $( ".all_twitts" ).find('iframe').contents().find('.timeline-TweetList-tweet').html() === 'undefined'||$(".all_twitts" ).html().length==0){
      $( ".all_twitts" ).load("twitts.php");
    }
    else{
      if ($(".all_twitts" ).html().length>0){
        clearInterval(timerId);
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
          var media="";

          if ($(this).find('.timeline-Tweet-media').html()=== undefined){

          }
          else{
            media=$(this).find('.timeline-Tweet-media').html();
          }
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
              media+
              '</div>'+
              '<div class="twitter__icons-date">'+
              '<div class="twitter__icons">'+
              '<a target="_blank" href="'+$(this).find(".TweetAction--heart").attr("href")+'"></a>'+
              /*'<a target="_blank" href="'+$(this).find(".TweetAction--share").attr("href")+'"></a>'+*/
              '</div>'+
              '<div class="twitter__date">'+
              $(this).find('.timeline-Tweet-metadata').html()+
              '</div>'+
              '</div>'+
              '</div>'
          );
        });
      }

    }
  }, 2000);


  $.ajax({url: "latest_posts.php",
    success: function(result){
    var posts=JSON.parse(result);
    //console.log(posts.posts);
      $(".previews").html(posts.posts);
    },
    error: function(result){
      //console.log(result);
      //$(".previews").html(result['posts']);
    }
  });

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
  function validatePhone(phone) {
    var re = /^\d[\d\(\)\ -]{4,14}\d$/;
    return re.test(phone);
  }

  $("#registration").submit(function (e) {
    var name=$(this).find("input[name='name']");
    var phone=$(this).find("input[name='phone']");
    var email=$(this).find("input[name='email']");
    var skype=$(this).find("input[name='skype']");
    var isAgree=$(this).find("input[name='isAgree']");
    var error=false;

    $(".form__error").hide();
    $(".form__error").css("margin-bottom","-5px");
    if (name.val().length<1)
    {
      name.parent().find(".form__error").html("Please enter your Full Name").show();
      name.parent().find(".form__error").css("margin-bottom","-30px");
      error=true;
    }
    if (phone.val().length<1)
    {
      phone.parent().find(".form__error").html("Please enter your Phone").show();
      phone.parent().find(".form__error").css("margin-bottom","-25px");
      error=true;
    }
    else{
      if (!validatePhone(phone.val()))
      {
        phone.parent().find(".form__error").html("Please enter correct Phone").show();
        phone.parent().find(".form__error").css("margin-bottom","-30px");
        error=true;
      }
    }

    if (email.val().length<1)
    {
      email.parent().find(".form__error").html("Please enter your Email").show();
      email.parent().find(".form__error").css("margin-bottom","-30px");
      error=true;
    }
    else{
      if (!validateEmail(email.val()))
      {
        email.parent().find(".form__error").html("Please enter correct Email").show();
        email.parent().find(".form__error").css("margin-bottom","-30px");
        error=true;
      }
    }
    if (error){
      return false
    }
    else {
      $("#form form").append("<div class='form__cover'></div>");
      var agree=false;
      if (isAgree.is(':checked')){
        agree=true;
      }
      $.ajax({
        url:     "../../mail_header_form.php",
        type:     "POST",
        dataType: "json",
        data: {
          Email: email.val(),
          Phone: phone.val(),
          FullName: name.val(),
          Skype: skype.val(),
          IsAgree: agree,
        },
        success: function(response) {
          //console.log(response);
          $("#header_from .form__cover").hide();
          if (response.Good==false){
            email.parent().find(".form__error").html(response.ErrorMessage).show();
          }
          else{
            $("#header_from .form__cover").hide();
            window.location.href = "thank-you.html?email="+email.val();
          }

        },
        error: function(response) {
          $("#header_from .form__cover").hide();
          email.parent().find(".form__error").html("Something Went Wrong. Please try again").show();
          console.log(response);
        }
      });
      return false;
    }
  });


  $("#header_from").submit(function () {
    var name=$(this).find("input[name='name']");
    var phone=$(this).find("input[name='phone']");
    var email=$(this).find("input[name='email']");
    var skype=$(this).find("input[name='skype']");
    var isAgree=$(this).find("input[name='isAgree']");
    var error=false;

    //$(".form__answer").html("");
    $(".u-content__form__error").hide();
    if (name.val().length<1)
    {
      name.parent().find(".u-content__form__error").html("Please enter your Full Name").show();
      error=true;
    }
    if (phone.val().length<1)
    {
      phone.parent().find(".u-content__form__error").html("Please enter your Phone").show();
      error=true;
    }
    else{
      if (!validatePhone(phone.val()))
      {
        phone.parent().find(".u-content__form__error").html("Please enter correct Phone").show();
        error=true;
      }
    }

    if (email.val().length<1)
    {
      email.parent().find(".u-content__form__error").html("Please enter your Email").show();
      error=true;
    }
    else{
      if (!validateEmail(email.val()))
      {
        email.parent().find(".u-content__form__error").html("Please enter correct Email").show();
        error=true;
      }
    }
    if (error){
      return false
    }
    else {
      $("#header_from").append("<div class='form__cover'></div>");
      var agree=false;
      if (isAgree.is(':checked')){
        agree=true;
      }
      $.ajax({
        url:     "../../mail_header_form.php",
        type:     "POST",
        dataType: "json",
        data: {
          Email: email.val(),
          Phone: phone.val(),
          FullName: name.val(),
          Skype: skype.val(),
          IsAgree: agree,
        },
        success: function(response) {
          //console.log(response);
          $("#header_from .form__cover").hide();
          if (response.Good==false){
            email.parent().find(".u-content__form__error").html(response.ErrorMessage).show();
          }
          else{
            $("#header_from .form__cover").hide();
            window.location.href = "thank-you.html?email="+email.val();
          }

        },
        error: function(response) {
          $("#header_from .form__cover").hide();
          email.parent().find(".u-content__form__error").html("Something Went Wrong. Please try again").show();
          console.log(response);
        }
      });
      return false;
    }
  });

  $(".contact__form form").submit(function () {
    var name=$(this).find("input[name='contact__name']");
    var phone=$(this).find("input[name='contact__phone']");
    var email=$(this).find("input[name='contact__email']");
    var website=$(this).find("input[name='contact__website']");
    var country=$(this).find("select[name='contact__country'] option:selected");
    var payments=$(this).find("select[name='contact__payments'] option:selected");
    var error=false;

    //$(".form__answer").html("");
    $(".u-content__form__error").hide();
    if (name.val().length<1)
    {
      name.parent().find(".u-content__form__error").html("Please enter your Full Name").show();
      error=true;
    }
    if (website.val().length<1)
    {
      website.parent().find(".u-content__form__error").html("Please enter your Company").show();
      error=true;
    }
    if (country.val().length<1)
    {
      country.parent().parent().find(".u-content__form__error").html("Please enter your Country").show();
      error=true;
    }

    if (payments.val().length<1)
    {
      payments.parent().parent().find(".u-content__form__error").html("Please select your Transaction volume").show();
      error=true;
    }




    if (phone.val().length<1)
    {
      phone.parent().find(".u-content__form__error").html("Please enter your Phone").show();
      error=true;
    }
    else{
      if (!validatePhone(phone.val()))
      {
        phone.parent().find(".u-content__form__error").html("Please enter correct Phone").show();
        error=true;
      }
    }

    if (email.val().length<1)
    {
      email.parent().find(".u-content__form__error").html("Please enter your Email").show();
      error=true;
    }
    else{
      if (!validateEmail(email.val()))
      {
        email.parent().find(".u-content__form__error").html("Please enter correct Email").show();
        error=true;
      }
    }
    if (error){
      return false;
    }

    else {
      $(this).append("<div class='form__cover'></div>");
      var form_data=$(this).serialize();
      $.ajax({
        url:     "mail.php",
        type:     "POST",
        data:     form_data,
        success: function(response) {

          $(".form__cover").hide();
          if (response.Good==false){
            email.parent().find(".u-content__form__error").html(response.ErrorMessage).show();
          }else{
            $(".modal").show();
          }
        },
        error: function(response) {
          $(".form__cover").hide();
          email.parent().find(".u-content__form__error").html("Something Went Wrong. Please try again").show();
          console.log(response);
        }
      });
      return false;
    }
  });

  $(".modal__close").click(function() {
    $(".modal").hide();
  });






});

window.onload = () => {
  if (document.body.offsetWidth < 860) {
    const addBackForHeader = () => {
      if (window.pageYOffset >= 100) {
        document.getElementById('header').classList.add('header__scrolled');
      } else {
        document.getElementById('header').classList.remove('header__scrolled');
      }
    };
    addBackForHeader();
    window.onscroll = () => {
      addBackForHeader();
    };
  }
};

function toggleMenu() {
  document.getElementById('header__menu').classList.toggle('header__menu_active');
  document.getElementById('header__button').classList.toggle('header__button_active');
}

function describePlatform(blockToShow, target) {
  const elements = [...document.getElementsByClassName('develop-at-will__platform_item')];
  const blocks = [...document.getElementsByClassName('u-content__develop')];
  elements.map(element => {
    element.classList.remove('develop-at-will__platform_item_active');
    return element;
  });
  target.classList.add('develop-at-will__platform_item_active');
  blocks.map(block => {
    if (!block.classList.contains('u-content__content_toggle')) {
      block.classList.add('u-content__content_toggle');
    }
    return block;
  });
  setTimeout(() => {
    blocks.map(block => {
      if (!block.classList.contains('u-content__content_disable')) {
        block.classList.remove('u-content__content_toggle');
        block.classList.add('u-content__content_disable');
      }
      if (block.id === blockToShow) {
        block.classList.remove('u-content__content_disable');
        setTimeout(() => {
          block.classList.remove('u-content__content_toggle');
        }, 10);
      }
      return block;
    });
  }, 600);



}


function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabs__tab");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tabs__link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
