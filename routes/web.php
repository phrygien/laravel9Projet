<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\V1\EcoleController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);

    //debut ecole
    Route::get('ecoles', [EcoleController::class, 'index']);
    Route::get('add-ecole', [EcoleController::class, 'create']);
    Route::post('add-ecole', [EcoleController::class, 'store']);
    Route::get('edit-ecole/{id}', [EcoleController::class, 'edit']);
    Route::put('update-ecole/{id}', [EcoleController::class, 'update']);
    Route::delete('delete-ecole/{id}', [EcoleController::class, 'destroy']);
    //fin ecole
});
