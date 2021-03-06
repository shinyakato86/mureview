<?php
Route::get('/top', 'TopController@index')->name('top.list');

Route::get('/reviews', 'ShopController@index')->name('shop.list');
Route::get('/review/new', 'ShopController@create')->name('shop.new');
Route::post('/review', 'ShopController@store')->name('shop.store');
Route::get('/review/edit/{id}', 'ShopController@edit')->name('shop.edit');
Route::post('/review/update/{id}', 'ShopController@update')->name('shop.update');

Route::get('/review/{id}', 'ShopController@show')->name('shop.detail');
Route::delete('/review/{id}', 'ShopController@destroy')->name('shop.destroy');

Route::get('/', function () {
    return redirect('/top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
