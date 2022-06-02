<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('homepage', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('aboutpage', [
        "title" => "About",
        "name" => "Lian Permadi",
        "email" => "Lianpermadi1@gmail.com",
        "image" => "daftarhadir.jpeg"
    ]);
});




Route::get('/blog', [PostController::class, 'index']);


// halaman single post

Route::get('posts/{slug}', [PostController::class, 'show']);