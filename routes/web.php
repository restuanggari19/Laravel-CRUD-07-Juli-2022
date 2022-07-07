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

Route::get('/Tampilan', [App\Http\Controllers\DataController::class, 'tampilan']);
Route::get('/edit/{id}', [App\Http\Controllers\DataController::class, 'edit']);
Route::get('tambah', [App\Http\Controllers\DataController::class, 'create']);
Route::post('tambah', [App\Http\Controllers\DataController::class, 'store']);
Route::post('/update', [App\Http\Controllers\DataController::class, 'update']);