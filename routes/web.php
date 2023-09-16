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

Route::get('/', function () {
    return view('welcome');
});

// group by controller
Route::controller(PostsController::class)->group(function() {
    Route::get('/posts', 'index')->name('posts');
    Route::get('/posts/{post}', 'show')->name('post');
    Route::post('/posts', 'store')->name('post-create');
});
