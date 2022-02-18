<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PostsController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is mwhere you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[siteController::class,'dashboard'])->name('dashboard');
Route::get('/user/{user}',[siteController::class,'userPost'])->name('post.userPost');

//Auth
Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/store',[AuthController::class,'store'])->name('store');

//Post
Route::get('/post',[PostController::class,'show'])->name('posts.show');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::delete('/posts/{post}',[PostController::class,'distroy'])->name('post.distroy');

//Like
// Route::get('/Like',[LikesController::class,'show'])->name('likes.show');
Route::post('/Likes/{post}',[LikeController::class,'store'])->name('likes.store');
Route::delete('/Likes/{post}',[LikeController::class,'destroy'])->name('likes.destroy');
