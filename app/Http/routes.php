<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// static pages

Route::get('/become-chef', function () {
    return view('pages.become-chef');
});

// home page
Route::get('/', 'HomeController@index');


// Kitchen pages

Route::get('/kitchens', 'Kitchen\ListController@index');
Route::get('/kitchens/{name}/{id}', 'Kitchen\DetailsController@index');
Route::get('/create-kitchen/{step}', 'Kitchen\CreateController@index');




Route::auth();
Route::get('/redirect', 'Auth\SocialAuthController@redirect');
Route::get('/callback', 'Auth\SocialAuthController@callback');

Route::get('/home', 'HomeController@index');
