<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/', function () {
    return view('about',[
        "title" => "about",
    ] [
        "name" => "Rafi MZ",
        "email" => "rafimz1234@gmail.com"
        "image" => "profile.jpeg"
    ]);
});




Route::get('/', function () {
    $blog_posts = [

        "title" => "judul"
        "author" => "Rafi MZ"
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure odio nulla consequatur? Atque culpa incidunt temporibus nulla laudantium. Quam assumenda tempore, laborum deserunt at quibusdam enim numquam suscipit quidem maiores."
    ]
    [
    
        "title" => "judul 2"
        "author" => "Rafi MZ"
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure odio nulla consequatur? Atque culpa incidunt temporibus nulla laudantium. Quam assumenda tempore, laborum deserunt at quibusdam enim numquam suscipit quidem maiores."
    ];
    return view('posts', [
        "title" => "posts"
        "posts" => $blog_posts
    ]);
});
