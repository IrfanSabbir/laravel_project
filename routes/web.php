<?php



Route::get('/', function () {
    return view('welcome');
});
 Route::get('/about-us/{name}/{mail}', 'HomeController@aboutUs');

 Route::get('/add','HomeController@add');

 Route::post('/store','HomeController@store');

 Route::get('/list','HomeController@all');

 Route::get('/edit/{id}','HomeController@edit');

 Route::post('/updateStore/{id}','HomeController@updateStore');

 Route::get('/delete/{id}','HomeController@delete');