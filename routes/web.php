<?php

use App\Http\Controllers\PostsController;
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

Route::get('/posts/{post}',[PostsController::class,'show']);
// Route::get('/posts/{post}', function ($post) {
//     return $post;
// });

// Route::get('/', function () {
//     $name = request('name');

//     return view('test', [
//         'name' => $name
//     ]);
// });

Route::get('/welcome', function () {
    return ['foo' => '44'];
});

// Route::get('test', function () {
//     return view('test');
// });
