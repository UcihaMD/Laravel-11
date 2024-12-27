<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blogg', function () {
//   return 'Hello World';
// });  -> basic route

// Route::view('/blog', 'blog'); -> route view 

Route::get('/blog', function () {
    return view('blog');
}); // -> route view dengan method

Route::get('/blog/{id}', function (Request $request) {
    return 'this is blog '.$request->route('id');
}); // -> route parameter