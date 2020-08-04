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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Catgory star .
Route::get('catgory/add','CatgoryControllwr@addcatgory')->name('addcatgory');
Route::post('catgory/post','CatgoryControllwr@postcatgory')->name('postcatgory');
Route::get('catgory/list','CatgoryControllwr@listcatgory')->name('listcatgory');


//Subcatgory start
Route::get('subcatgory/add','subCatgoryControllwr@addsubcatgory')->name('addsubcatgory');
Route::post('subcatgory/post','subCatgoryControllwr@postsubcatgory')->name('postsubcatgory');
Route::get('subcatgory/list','subCatgoryControllwr@listsubcatgory')->name('listsubcatgory');
