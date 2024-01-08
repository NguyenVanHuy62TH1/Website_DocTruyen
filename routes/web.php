<?php

use App\Http\Controllers\ChapterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TheloaiController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/danh-muc/{slug}', [IndexController::class, 'danhmuc']);
Route::get('/xem-truyen/{slug}', [IndexController::class, 'xemtruyen']);
Route::get('/xem-chapter/{slug}', [IndexController::class, 'xemchapter']);
Route::get('/the-loai/{slug}', [IndexController::class, 'theloai']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('danhmuc', DanhmucController::class);
Route::resource('truyen', TruyenController::class);
Route::resource('chapter', ChapterController::class);
Route::resource('theloai', TheloaiController::class);

