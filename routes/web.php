<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes(['verify' => true, 'register' => true]);





Route::group(['namespace'=>'App\Http\Controllers'], function() {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::group(['middleware'=>['guest']], function() {
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });


    Route::group(['middleware' => ['auth'] ], function () {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        //Route::post('/', ) TODO: establish route for submitting questions
        Route::middleware(['verified'])->get('/viewQuestions', 'QuestionsController@displayQuestions');
        Route::post('/', 'QuestionsController@updateQuestions')->name('questions.update');

    });
});