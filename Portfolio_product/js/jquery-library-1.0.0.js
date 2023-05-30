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

  


$(function() {
  
  var Page = (function() {

    var $navArrows = $( '#nav-arrows' ).hide(),
      $shadow = $( '#shadow' ).hide(),
      slicebox = $( '#sb-slider' ).slicebox( {
        onReady : function() {

          $navArrows.show();
          $shadow.show();

        },
        orientation : 'r',
        cuboidsRandom : true
      } ),
      
      init = function() {

        initEvents();
        
      },
      initEvents = function() {

        // add navigation events
        $navArrows.children( ':first' ).on( 'click', function() {

          slicebox.next();
          return false;

        } );

        $navArrows.children( ':last' ).on( 'click', function() {
          
          slicebox.previous();
          return false;

        } );

      };

      return { init : init };

  })();

  Page.init();

});