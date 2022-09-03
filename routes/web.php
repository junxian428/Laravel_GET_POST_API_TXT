<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

Route::get('/HELLO', function () {
    return view('HELLO.hello');
});
Route::group(['prefix'=>'HELLO','as'=>'HELLO.'], function(){
    Route::get('/hello', function () {
        return view('HELLO.hello');
    });
    Route::get('/hola', function () {
        return view('HELLO.hola');
    });
});

Route::get('/land', function(){
    return view('layout');
});

Route::get('/send', function(){
    return view('send');
});
Route::get('/send',[  // define your self
    'uses'=>'App\Http\Controllers\SendController@index',
    'as'=>'send.index'    // check the charactor when you copy paste from PPT
]);

Route::post('/postMessage',[  // define your self
    'uses'=>'App\Http\Controllers\SendController@send',
    'as'=>'send.Message'    // check the charactor when you copy paste from PPT
]);



