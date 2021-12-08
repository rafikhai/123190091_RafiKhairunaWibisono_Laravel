<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; //panggil MahasiswaController
use App\Http\Controllers\HomeController; //panggil HomeController
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//return view('welcome');
//});




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //login proses
Route::get('/logout', function () { //logout
    Auth::logout();
    return redirect('/home');
});

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/store', [MahasiswaController::class, 'store']); //memasukkan data dan update data
Route::get('/edit/{id}', [MahasiswaController::class, 'edit']); //id diambil sbg sumber id nya
Route::post('/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/destroy/{id}', [MahasiswaController::class, 'destroy']);
