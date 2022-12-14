<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClienteController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('cliente/create',[ClienteController::class,'create']);
*/
Route::resource('cliente',ClienteController::class);
