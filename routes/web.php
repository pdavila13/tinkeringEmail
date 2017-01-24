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

//Route::get('/sendmail', function () {
//    Mail::send('email.welcome',[],function($msg) {
//        $msg->to('pdavila@iesebre.com')->subject('welcome');
//    });
//    dump('Email enviat correctament.');
//});

Route::get('/sendmail', function () {
    Mail::to('pdavila@iesebre.com')->send(new WelcolmeEmail());
    dump('Email enviat correctament.');
});