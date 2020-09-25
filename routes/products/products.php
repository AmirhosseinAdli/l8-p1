<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

//Route::view('/', 'welcome');

Auth::routes();

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

//Route::get('search/{search}', function ($search) {
//    return $search;
//})->where('search', '.*');
//
//Route::get('user/{name}', function ($name) {
//    return 'string';
//})->where('name', '[A-Za-z]+')->name('usr1');
//
//Route::get('user/{id}', function ($id) {
//    return 'digit';
//})->where('id', '[0-9]+')->name('usr2');
//
//Route::get('api/users/{user_id}', function ($user_id) {
//    $user = \App\Models\User::find('email');
//    return $user->email;
//});
//
//Route::get('api/users/{user}', function (App\Models\User $user) {
//    return $user->email;
//});
//
//Route::get('user/{id}/profile', function ($id) {
//    echo $id;
//})->name('profile');
//
////$url = route('profile', ['id' => 1, 'photos' => 'yes']);
