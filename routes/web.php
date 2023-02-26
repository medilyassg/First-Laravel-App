<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return 'Hello world';
});


Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/show/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/posts/create',[PostController::class,'create']);

Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');

Route::get('posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit');

Route::patch('/posts/{id}',[PostController::class,'update'])->name('posts.update');

Route::delete('/posts/delete/{id}',[PostController::class,'destroy'])->name('posts.delete');