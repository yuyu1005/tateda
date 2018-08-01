<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        function slideSwitch() {
           var $active = $('#slideshow img.active');

           if ( $active.length == 0 ) $active = $('#slideshow img:last');

           var $next =  $active.next().length ? $active.next()
              : $('#slideshow img:first');

           $active.addClass('last-active');

           $next.css({opacity: 0.0})
             .addClass('active')
             .animate({opacity: 1.0}, 1000, function() {
                  $active.removeClass('active last-active');
             });
        }

        $(function() {
         setInterval( "slideSwitch()", 3000 );
        });
        </script>
        <title>survivalgame</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
      <div class="container-flude">
        <header></header>
        <h1>Survival Game<br>
        <span class="subtitle">サバゲー情報共有のためのサイトです</span></h1>

        <div class="wrapper">
         <div class="element"><i class="far fa-address-book"></i><a href='/mypage', 'UserController@index'>MY PAGE</a></div>
         <div class="element"><i class="far fa-heart"></i><a href='/like',>LIKE</a></div>
         <div class="element"><i class="far fa-comments"></i>MESSAGE</div>
         <div class="element"><i class="fas fa-search"></i>SEARCH</div>
       </div><!-- wrapper -->
       <div id="slideshow">
         <img src="{{ asset('/img/img1.jpg') }}" alt="画像１" class="active">
         <img src="{{ asset('/img/img.jpg') }}" alt="画像２">
         <img src="{{ asset('/img/img3.jpg') }}" alt="画像3">
         <img src="{{ asset('/img/img4.jpg') }}" alt="画像4">
         <img src="{{ asset('/img/img5.jpg') }}" alt="画像5">
         <img src="{{ asset('/img/img6.jpg') }}" alt="画像6>
       </div>
        <div class="row">
          <div class="col-lg-3">アカウント①</div>
          <div class="col-lg-3">アカウント②</div>
          <div class="col-lg-3">アカウント③</div>
          <div class="col-lg-3">アカウント④</div>
        </div>
        <footer></footer>
      </div><!-- container-flude -->
    </body>
</html>
