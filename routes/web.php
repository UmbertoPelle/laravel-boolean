<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $data = config('pasta.data');
  return view('home', compact('data'));
});
