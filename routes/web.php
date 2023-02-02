<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/company/index', [CompanyController::class, 'index'])->name('company.index');
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::post('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::get('/company/view', [CompanyController::class, 'view'])->name('company.view');
Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
// Route::prefix('company')->name('company.')->group(function () {
//     Route::get('index', [CompanyController::class, 'index'])->name('index');
//     Route::get('create', [CompanyController::class, 'create'])->name('create');
// });

Auth::routes();
