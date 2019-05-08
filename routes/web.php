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
Route::get('details','DetailsController@index'); //get all the personal information
Route::get('detail/{id}','DetailsController@show'); //get the detuals of a single user
Route::post('details','DetailsController@store'); //add new details
Route::put('detail/{id}','DetailsController@update'); //update the details of the client requests
Route::delete('detail/{id}','DetailsController@destroy'); //delete the information upon request
Route::resource('profile','UserProfileController'); //the url for the user to view their profiles

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
