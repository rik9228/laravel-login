<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|ll
*/

// ログイン画面のルートをセット
Route::get('/',[AuthController::class,'showLogin'])->name('showLogin');
// ログイン処理のルートをセット
Route::post('login',[AuthController::class, 'login'])->name('login');
