<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\crud\UserController;

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

/* Route::get('/', function () {
    return view('main');
});
 */
/* Route::get('/user', function () {
    return view('user.index');
});

Route::get('/user/create', [UserController::class, 'create']); */

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('user', UserController::class );

Auth::routes();

Route::get('/home', [UserController::class, 'index'])->name('home');

// Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [UserController::class, 'index'])->name('home');

});
