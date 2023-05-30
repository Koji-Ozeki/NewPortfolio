$(function() {
  $('.Toggle').click(function() {
    $(this).toggleClass('active');

  if ($(this).hasClass('active')) {
    $('.NavMenu').addClass('active');　 //クラスを付与
  } else {
    $('.NavMenu').removeClass('active'); //クラスを外す
  }
  });
});

// アコーディオン
// .s_01 .accordion_one
$(function(){
  //.accordion_oneの中の.accordion_headerがクリックされたら
  $('.s_01 .accordion_one .accordion_header').click(function(){
    //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
    $(this).next('.accordion_inner').slideToggle();
    $(this).toggleClass("open");
  });
});


// Slick サムネイル付き
$(function () {
    $('.slider_thumb').slick({
      arrows: false,
      asNavFor: '.thumb',
    });
    $('.thumb').slick({
      asNavFor: '.slider_thumb',
      focusOnSelect: true,
      slidesToShow: 4,
      slidesToScroll: 1
    });
  });

  



  $(function(){
    $('#loopslider').each(function(){
        var loopsliderWidth = $(this).width();
        var loopsliderHeight = $(this).height();
        $(this).children('ul').wrapAll('<div id="loopslider_wrap"></div>');
 
        var listWidth = $('#loopslider_wrap').children('ul').children('li').width();
        var listCount = $('#loopslider_wrap').children('ul').children('li').length;
 
        var loopWidth = (listWidth)*(listCount);
 
        $('#loopslider_wrap').css({
            top: '0',
            left: '0',
            width: ((loopWidth) * 2),
            height: (loopsliderHeight),
            overflow: 'hidden',
            position: 'absolute'
        });
 
        $('#loopslider_wrap ul').css({
            width: (loopWidth)
        });
        loopsliderPosition();
 
        function loopsliderPosition(){
            $('#loopslider_wrap').css({left:'0'});
            $('#loopslider_wrap').stop().animate({left:'-' + (loopWidth) + 'px'},25000,'linear');
            setTimeout(function(){
                loopsliderPosition();
            },25000);
        };
 
        $('#loopslider_wrap ul').clone().appendTo('#loopslider_wrap');
    });
});