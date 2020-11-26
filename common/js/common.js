// JavaScript Document


$(function () {
  $('.hamburger').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
        $('.globalMenuSp').addClass('active');
        $('.globalMenuSp').fadeIn(500);
    } else {
        $('.globalMenuSp').removeClass('active');
        $('.globalMenuSp').fadeOut(500);
    }
  });

  $('.globalMenuSp ul li a').click(function () {
    $('.globalMenuSp').removeClass('active');
	$('.hamburger').removeClass('active');
    $('.globalMenuSp').fadeOut(1000);
    $('.Toggle').removeClass('active');
  });
});

$(function() {
    var topBtn = $('#f_btn');    
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});