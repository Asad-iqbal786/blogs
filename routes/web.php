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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/NewForget', function () {
//     return view('CustomAuth.NewForget');
// });


//front end 

Route::get('/', function () {
    return view('frontend.blog');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/details', function () {
    return view('frontend.blog-details');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Backend
Route::group(['middleware' => 'auth'],function(){


    Route::get('/dashbord', function () {
        return view('backend.layout.ddMaster');
    });
    Route::get('/show', function () {
        return view('backend.partials.categoryForm');
    });
    
    Route::get('/cagetory','CategoryController@index');
    Route::POST('/addCatgory','CategoryController@create')->name('cagetory');


    Route::get('/getAllCategories','CategoryController@getAllCategories');

});

