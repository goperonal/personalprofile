<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('pages/homepage');
});
Route::get('/projects', function () {
    return view('pages/projectpage');
});
Route::get('/articles', ArticleController::class);
Route::get('/articles/{post:slug}', [PostController::class, 'show' ])->name('view');
Route::get('/uses', function () {
    return view('pages/usespage');
});




