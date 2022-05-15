<?php

use App\Http\Controllers\PaymentPlatformController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewComposerController;
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
Route::get('role', [UserController::class, 'userRole']);

Route::get('select-payment-platform', [PaymentPlatformController::class, 'selectPaymentPlatform']);

Route::get('post/index', [ViewComposerController::class, 'postIndex']);
Route::get('comment/index', [ViewComposerController::class, 'commentIndex']);
