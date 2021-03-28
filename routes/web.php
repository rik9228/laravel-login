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

// ログイン前
Route::middleware(['guest'])->group(function () {
  // ログイン画面のルートをセット
  Route::get('/', [AuthController::class, 'showLogin'])->name('login.show');
  // ログイン処理のルートをセット
  Route::post('login', [AuthController::class, 'login'])->name('login');
});

// ログイン後
Route::middleware(['auth'])->group(function () {
  // ホーム画面
  Route::get('home', function () {
    return view('home');
  })->name('home');

  // ログアウト
  Route::post('logout',[AuthController::class,'logout'])->name('logout');
});
