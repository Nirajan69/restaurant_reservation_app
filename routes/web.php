<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
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
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/categories', CategoryController::class);
Route::resource('/menus', MenuController::class);
Route::resource('/tables', TableController::class);
Route::resource('/reservations', ReservationController::class);


// Route::middleware(['tokenMiddleware:token']) ->prefix('admin')->name('admin.')->group(
//     function () {
// });

// Route::middleware(['tokenMiddleware:token']) ->prefix('admin')->name('admin.')->group(
//     function () {

//         Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

//     }
// );
