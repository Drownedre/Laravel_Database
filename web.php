<?php

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
    return view('welcome');
});
Route::get('/index-data', [App\Http\Controllers\ctrl_buku::class, 'getAll']);
Route::get('/add-data', function (){
    return view('tambah_buku');
});
Route::post('/insert-data', [App\Http\Controllers\ctrl_buku::class, 'simpan']);
Route::get('/delete-data/{id}', [App\Http\Controllers\ctrl_buku::class, 'delete']);
Route::get('/update/{id}', [App\Http\Controllers\ctrl_buku::class, 'getbyid']);
Route::post('/updating-data/{id}', [App\Http\Controllers\ctrl_buku::class, 'update']);
