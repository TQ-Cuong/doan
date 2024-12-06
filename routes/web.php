<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AptechController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/hoc-laravel',[AptechController::class,"hello"]);
Route::get('/hoc-reactjs',[AptechController::class,"reactjs"]);
Route::get('/homepage',[HomeController::class,"home"]);
Route::get('/toanbothanhvien',[HomeController::class,"member"]);
Route::get('/xoa-thanh-vien/{id}',[HomeController::class,"deletNember"]);