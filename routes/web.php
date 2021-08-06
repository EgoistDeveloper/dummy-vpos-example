<?php

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

Route::get('', function(){
    $params = [
        'test' => true,
        'tid' => hash('md5', time()),
        'name' => 'John Doe',
        'price' => 999.99,
        'successCallback' => route('success'),
        'errorCallback' => route('fail')
    ];

    $query = http_build_query($params);
    $vposUrl = route('dummy-vpos.show'). "?{$query}";

    return view('home', compact('vposUrl'));
});

Route::get('success', function(){
    return view('success');
})->name('success');

Route::get('fail', function(){
    return view('fail');
})->name('fail');
