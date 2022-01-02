<?php

use App\Http\Livewire\Dashboard;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth')->group(function () {
    Route::prefix('account')->group(function () {
    });
    Route::prefix('kelurahan')->group(function () {
        route::resource('kelurahan', KelurahanController::class);
    });
});
Route::get('', Dashboard::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
