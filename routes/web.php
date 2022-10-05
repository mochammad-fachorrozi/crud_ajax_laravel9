<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// crud ajax (robith rivaldy)
Route::get('/', [ProductController::class, 'index']);
Route::get('/read', [ProductController::class, 'read']);
Route::get('/create', [ProductController::class, 'create']);
Route::get('/store', [ProductController::class, 'store']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::get('/update/{id}', [ProductController::class, 'update']);
Route::get('/destroy/{id}', [ProductController::class, 'destroy']);


// crud ajax (funda of web IT)
Route::get('employee', [EmployeeController::class, 'index']);
Route::post('employee', [EmployeeController::class, 'store']);
Route::get('fetch-employee', [EmployeeController::class, 'fetchEmployee']);
Route::get('edit-employee/{id}', [EmployeeController::class, 'edit']);
Route::post('update-employee/{id}', [EmployeeController::class, 'update']);
Route::delete('delete-employee/{id}', [EmployeeController::class, 'destroy']);
