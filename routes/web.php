<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/



Route::get('/', function () {
   
    return view('home');
});


 Route::get('/signin', 'UserController@signin')->name('signin');
 Route::post('/signin', 'UserController@createUser')->name('create-user');

 Route::get('/api/get-hospitals', 'InfoController@getHospitalData')->name('get-hospitals');
 Route::get('/search', 'InfoController@searchResult')->name('search');
