<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;


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

//Route::get('/', [ContactController::class, 'index']);

Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/contacts/confirm/thanks', [ContactController::class, 'index']);

Route::get('contacts/confirm', [ContactController::class, 'index']);

//Route::get('/', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'login']);
//Route::get('/register/login', [RequestController::class, 'contact']);


Route::get('/', [AdminController::class, 'admin']);

Route::get('/admin', [AuthorController::class, 'admin']);



