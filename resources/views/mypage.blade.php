<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/mypage.css') }}">

        <title>SurvivalGame/MｙPage</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    </head>
    <body>
      <div class="container-flude">
        <header></header>
        <h1>Survival Game<br>
        <span class="subtitle">サバゲー情報共有のためのサイトです</span></h1>

        <div class="wrapper">
         <div class="element"><i class="far fa-address-book"></i><a href='/mypage', 'UserController@index'>MY PAGE</a></div>
         <div class="element"><i class="far fa-heart"></i>LIKE</div>
         <div class="element"><i class="far fa-comments"></i>MESSAGE</div>
         <div class="element"><i class="fas fa-search"></i>SEARCH</div>
       </div>
     </div>
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-md-3 user">
              <img class="icon-img" alt="usericon" src="{{ asset('/img/icon.jpg') }}"/>
              <br><p>ユーザ名<br>自己紹介<br>設定</p>
          </div> <!-- user -->
      		<div class="col-md-7 main">
                <a href="arms/post" class="square_btn">　投稿する　</a>
          </div><!-- main -->
      		<div class="col-md-2" ad>広告
          </div><!-- ad -->
        </div><!-- row -->
      </div><!-- container-fluid  -->
    </body>
</html>
