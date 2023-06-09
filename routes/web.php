<?php

use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Main\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'index']);
Route::get('/post-list', [Post::class, 'postList']);
Route::get('/create-post', [Post::class, 'createPost']);
Route::post('/add-post', [Post::class, 'addPost']);
Route::any('/edit-post/{id}', [Post::class, 'editPost']);
Route::any('/{id}/{pramaLink}', [Post::class, 'viewPost']);
