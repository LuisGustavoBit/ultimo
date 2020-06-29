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

//Route::get('/', function () {
///    return view('welcome');
//});


//our home contact route will be  this index function 
Route::get('/','ContactController@index');
//our add contact route will be this addcontact route  
Route::post('addContact','ContactController@addContact');
//our edit contact route will be this editcontact route
Route::post('editContact','ContactController@editContact');
//our delete contact route will be this deletecontact route
Route::post('deleteContact','ContactController@deleteContact');