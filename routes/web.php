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
Route::get('/' , [PostController::class , 'index'])->name('get.index');
Route::get('/add' , [PostController::class , 'create'])->name('get.create');
Route::post('/post' , [PostController::class , 'store'])->name('post.store');
Route::get('/post/{post}' , [PostController::class , 'show'])->name('post.show');
Route::get('/edit/{post}' , [PostController::class , 'edit'])->name('post.edit');
Route::put('/post/{post}' , [PostController::class , 'update'])->name('post.update');
Route::delete('/delete/{post}' , [PostController::class , 'destroy'])->name('post.destroy');