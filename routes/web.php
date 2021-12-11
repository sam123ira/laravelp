<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\commentcontroller;
use Illuminate\Support\Str;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/posts', [postController::class, 'index']);
Route::get('posts/create', [postController::class, 'create']);
Route::post('/posts/store', [postController::class, 'store']);
Route::get('posts/{id}', [postcontroller::class, 'show']);

Route::post('/comments/comment', [commentcontroller::class, 'index']);
Route::get('/comments/comment', [commentcontroller::class, 'index']);
