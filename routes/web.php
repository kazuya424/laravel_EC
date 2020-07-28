<?php

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

Route::get('/', 'ShopController@index');
Route::group(['middleware' => ['auth']], function () {

    Route::get('/mycart', 'ShopController@myCart');
    Route::post('/mycart', 'ShopController@addMycart');
    Route::post('/cartdelete', 'ShopController@deleteCart');
    Route::post('/checkout', 'ShopController@checkout');

    // 追加
    Route::get('/home/user', 'UserController@index')->name('homeIndex');
    Route::get('/home/user/userEdit', 'UserController@userEdit')->name('user.userEdit');
    Route::post('/home/user/userEdit', 'UserController@userUpdate')->name('user.userUpdate');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
