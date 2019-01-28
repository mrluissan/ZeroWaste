<?php

Route::get('/', 'LandingPageController')->name('landing');
Route::get('/food', 'FoodController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'ShowAbout')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
