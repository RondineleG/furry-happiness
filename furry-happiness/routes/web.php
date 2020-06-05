<?php

use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {

    Route::namespace('Admin')->group(function () {

        Route::prefix('admin')->group(function () {

            Route::name('admin.')->group(function () {
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

                Route::get('/produtos', 'TesteController@teste')->name('produtos');

                Route::get('/', function () {
                    return redirect()->route('dashboard');
                })->name('home');
            });
        });
    });
});

Route::group([
    'middleware'=>[],
    'prefix'=> 'admin',
    'namespace' => 'Admin',
    'name' =>'admin.'

],function(){
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('produtos');

    Route::get('/', function () {
        return redirect()->route('dashboard');
    })->name('home');
});

Route::get('/login', function () {
    return "Login";
})->name('login');



Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect', function () {
    return redirect()->route('urlname');
});

Route::get('/redirect2', function () {
    return "Ola 2";
});

Route::get('/nomeurl', function () {
    return "HEI HEI";
})->name('urlname');





Route::get('/produtos/{idProduct?}', function ($idProduct = 'Nada encontrado!!') {
    return "Produtos : {$idProduct}";
});


Route::get('/categoria/{flag}/posts', function ($flag) {

    return "Posts da Produtos da categoria : {$flag}";
});

Route::any('/any', function () {
    return "any";
});

Route::match(['get', 'post'], '/match', function () {
    return "match";
});

Route::get('/contato', function () {
    return view('site.Contact');
});

Route::get('/hey', function () {
    return ('Olha Mundo');
});

Route::get('/', function () {
    return view('welcome');
});
