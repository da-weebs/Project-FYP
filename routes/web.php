<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CoordinatorController;
// use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\SearchController;
// use App\Http\Controllers\FormController;
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
    return view('auth.login');
});

Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');