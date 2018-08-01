<?php
 error_reporting(E_ALL);
 ini_set("display_errirs",1);
 ?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/armspost.css') }}">
        <title>Survival Game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
     <h1>サバゲー装備を投稿しよう!</h1>
     <div class="container-flude">
       @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       <form method="post" action="/arms/post/commit" enctype="multipart/form-data">
          {{ csrf_field() }}
          <select name="genre" id="select">
          <option value="" select>ジャンル</option>
          <option value="0">銃</option>
          <option value="1">戦闘服</option>
          <option value="2">その他</option>
      </select>
　　　　　　<input type="file" name="image">
          <p><label for="comment">銃、なに使ってる？</label><br>
          <textarea name="text" id="text"></textarea></p>
          <p class="submit-p"><input type="submit" value="投稿" id="submit" name="submit"></p>
       </form>
     </div><!-- container-flude -->

    </body>
</html>
