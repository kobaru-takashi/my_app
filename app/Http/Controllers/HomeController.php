<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
  {
      // DBよりBookテーブルの値を全て取得
      $books = Home::all();

      // 取得した値をビュー「book/index」に渡す
      return view('home/index', compact('homes'));
  }
}
