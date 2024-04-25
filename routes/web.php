<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/delia', function () {
    return view('selamatDTG');
});

Route::get('/deliaw', function () {
    return view('index');
});

Route::get('/profile',[UserController::class, 'index'])->name ('UserIndex'); 

route::get('/profile_', [UserController::class, 'tambah']);
route::get('/tambahuser', [UserController::class, 'tambah']);
route::post('/kirimuser', [UserController::class,'add']);
route::get('/profile/detail/{id}', [UserController::class, 'detail']);
route::get('/profile/edit/{id}',[UserController::class, 'detailedit']);
route::post('/edituser/{id}', [UserController::class,'edit']);
route::get('/profile/hapus/{id}',[UserController::class, 'hapus']);