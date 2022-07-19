<?php

use Illuminate\Support\Facades\Route;
//call controller
use App\Http\Controllers\BarangController;

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
    return view('index', ['title' => 'Sport Market']);
});
Route::get('/index', function(){
    return view('index');
});
//added route for call BarangController
Route::get('/index', [BarangController::class, 'index']);
Route::get('/barang', [BarangController::class, 'barang']);
//added route for call add methode in BarangController
Route::get('/barang/tambah', [BarangController::class, 'tambah']);
Route::post('/barang/simpan', [BarangController::class, 'simpan']);
Route::get('/barang/edit/{id}', [BarangController::class, 'ubah']);
Route::post('/barang/update', [BarangController::class, 'update']);
Route::get('/barang/hapus/{id}', [BarangController::class, 'hapus']);