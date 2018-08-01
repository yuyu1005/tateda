<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Validator;
use Illuminate\Support\Facades\Auth;

class ArmsController extends Controller
{
  public function index()
  {
      return view('arms_post');
  } //  入力画面　viewは＿でくぎる//
  public function post(Request $request)
  {
      $this->validate($request, [
        'genre' => 'required',
        'image' => 'required','text' => 'required',]);
    $image_name = $request->image->getClientOriginalName();//元々のユーザIDを通さない
    $user_id = Auth::id();
     $data =[
       'img' => $image_name,
       'summary' => $request->text,
       'genre_id' => $request->genre,
     ];
     //todo modelメソッドを呼び出す
     dd($data);
  }
}
