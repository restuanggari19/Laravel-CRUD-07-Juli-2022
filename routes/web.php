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
    return view('login');
});

Route::get('/Tampilan', [App\Http\Controllers\DataController::class, 'tampilan']);
Route::get('/edit/{id}', [App\Http\Controllers\DataController::class, 'edit']);
Route::post('/tambah', [App\Http\Controllers\DataController::class, 'store']);
Route::get('/create', [App\Http\Controllers\DataController::class, 'create']);
Route::post('/update', [App\Http\Controllers\DataController::class, 'update']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/postLogin', [App\Http\Controllers\LoginController::class, 'pLogin'])->name('pLogin');
Route::get('logout', [App\Http\Controllers\LoginController::class, 'keluar'])->name('keluar');
Route::get('/delete/{id}', [App\Http\Controllers\DataController::class, 'delete']);