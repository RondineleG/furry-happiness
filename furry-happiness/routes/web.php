<?php

use Illuminate\Support\Facades\Route;

Route::get('/contato', function (){
    return view('site.Contact');
});

Route::get('/hey', function (){
    return ('Olha Mundo');
});


Route::get('/', function () {
    return view('welcome');
});
