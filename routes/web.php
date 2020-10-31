<?php

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

Route::get('/about-me', function () {
    return 'Nama Saya : <b>Muhammad Saidi</b>';
});

Route::get('/nim', function () {
    return ('NIM : <b>1811102441069</b>');
});

Route::get('/prodi', function () {
    return ('Prodi : <b>S1 Teknik Informatika</b>');
});

Route::get('/kampus', function () {
    return ('Kampus : <b>UNIVERSITAS MUHAMMADIYAH KALIMANTAN TIMUR</b>');
});

Route::get('/sistem-perkuliahan', function () {
    return ('Sistem Kuliah : <b>Daring</b>');
});

Route::get('/testing-view', function () {
    return view('view-1');   
});

use App\Http\Controllers\Controller1;
use App\Http\Controllers\Controller2;

Route::get("/test1", [Controller1::class,"test1"]);
Route::get("/test2", [Controller1::class,"test2"]);
Route::get("/test3", [Controller1::class,"test3"]);

Route::get("/test4", [Controller2::class,"satu"]);
Route::get("/test5", [Controller2::class,"dua"]);
Route::get("/test6", [Controller2::class,"tiga"]);