<?php

use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::resource('users', UserController::class);
Route::get('/home', function () {
    return view('user.sanpham.home');
});
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::prefix('categories')
            ->name('categories.')
            ->controller(CategoryProductController::class)
            ->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::post('{id}/update', 'update')->name('update');
                Route::delete('{id}/delete', 'delete')->name('delete');
            });
    });
