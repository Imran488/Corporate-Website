<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\UserController;
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

Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/do-login',[UserController::class,'userlogin'])->name('user.do.login');
Route::get('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/do-registration',[UserController::class,'userregister'])->name('user.do.registration');
Route::get('/logout',[UserController::class,'userlogout'])->name('logout');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about.us');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact.us');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy.policy');
Route::get('/termsandconditions',[HomeController::class,'terms'])->name('terms.conditions');



Route::group(['middleware'=>'user'], function () {
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::post('/message-us', [HomeController::class, 'message'])->name('message.us');
});
