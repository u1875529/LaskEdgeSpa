<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/
/*Localhost:8000 opens the home page*/
Route::get('/', function () {
    return view('welcome');
});

/*create a route for appointments*/
Route::resource('appointments', 'AppointmentController');

/*catch the appointments route*/
Route::get('appointments', function()
{
    return view('appointments.create');
});
