<?php

use Illuminate\Support\Facades\Route;

Route::view('/view', 'welcome');

Route::redirect('/redirect1','/redirect2');

Route::get('/redirect', function(){
    return redirect()->route('urlname');
});

Route::get('/redirect2', function(){
    return "Ola 2";
});

Route::get('/nomeurl', function(){
    return "HEI HEI";
})->name('urlname');





Route::get('/produtos/{idProduct?}', function($idProduct = 'Nada encontrado!!'){
    return"Produtos : {$idProduct}";
});


Route::get('/categoria/{flag}/posts', function($flag){

    return "Posts da Produtos da categoria : {$flag}";
});

Route::any('/any', function() {
    return "any";
});

Route::match(['get', 'post'],'/match', function() {
    return "match";
});

Route::get('/contato', function (){
    return view('site.Contact');
});

Route::get('/hey', function (){
    return ('Olha Mundo');
});

Route::get('/', function () {
    return view('welcome');
});


