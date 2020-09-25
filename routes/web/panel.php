<?php

use App\Http\Controllers\HomeController;
//use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

//Route::resource('projects', 'App\Http\Controllers\ProjectController');
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::get('/home', [ProjectController::class, 'index']);

Route::resource('alarms', 'AlarmController');

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::name('alarms.')
//    ->prefix('alarms')
//    ->namespace('\App\Http\Controllers\Panel')
//    ->group(function () {
//        Route::get('/',[AlarmController::class,'index'])->name('index');
//        Route::get('/create',[AlarmController::class,'create'])->name('create');
//        Route::post('/{alarm}',[AlarmController::class,'store']);
//        Route::get('/{alarm}',[AlarmController::class,'show']);
//        Route::get('/{alarm}',[AlarmController::class,'edit']);
//        Route::patch('/{alarm}',[AlarmController::class,'update']);
//        Route::delete('/{alarm}',[AlarmController::class,'destroy']);
//    });

Route::get('foo', function () {
    return 'Hello World';
});
