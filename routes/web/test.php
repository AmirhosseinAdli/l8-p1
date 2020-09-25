<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::middleware('test')->group(function () {
//    Route::get('test', function () {
//    });
//    Route::get('test', function () {
//    });
//    Route::get('test', function () {
//    });
//    Route::get('test', function () {
//    });
//    Route::get('test', function () {
//    });
//    Route::get('test', function () {
//    });
//});


Route::get('/{data?}', function (Request $request, $data = null) {
    return view('child_test')->withData($data)->withQuery($request->query());
});
Route::post('/{data?}', function (Request $request) {
    dd($request->cookie('name'));
    return response($request->filled('check_me'))->cookie('name','value',10);
//    dd($request->filled('check_me'));
//    dd($request->boolean('is_checked'));
//    dd($request->input('0.name'));
//    dd([
//        'all' => $request->all(),
//        'input' => $request->input(),
//        'query' => $request->query(),
//        'method' => $request->method(),
//        'path' => $request->path(),
//        'url' => $request->url(),
//        'full_url' => $request->fullUrl(),
//    ]);
////    $string = 'var1';
////    dd(
////        $request->input($string),
////        $request->{$string}
////    );
})->name('form');
