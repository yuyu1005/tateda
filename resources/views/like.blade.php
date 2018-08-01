<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/mypage.css') }}">

        <title>SurvivalGame/like</title>
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
     </body>
