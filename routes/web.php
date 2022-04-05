<?php

use App\Http\Controllers\AuthController;
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



Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('user.postLogin');

Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('user.postRegister');


Route::group(['middleware' => ['auth:web']], function ()
{
    Route::get('/', function () {
        return view('welcome');
    })->name('user.welcome');

    Route::get('/logout', [AuthController::class, 'logout']);
})
;
