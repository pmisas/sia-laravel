<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\siaController;
use App\Http\Controllers\LoginController;

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

Route::get('/', homeController::class)->name('inicio');

Route::controller(siaController::class)->group(function(){  
     

    Route::get('sia/admision', 'create')->name('sia.create');

    Route::get('sia/{nick}', 'index')->name('sia.index');

    Route::get('sia/{nick}/inscripcion/{materia?}', 'show')->name('sia.show');

});


Route::post('sia/admision/register', [LoginController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('edit', [LoginController::class, 'edit'])->name('edit');

