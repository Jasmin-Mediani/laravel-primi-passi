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

 Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/prodotti", function () {
    return view("prodotti");
})->name("prodotti");


// Route::get("/", function () {
//     return view("home");
// })->name("home");

Route::get("/news", function () {
    return view("news");
})->name("news"); 



Route::get('/prodotti/{id}', function ($id) { //l'argomento passato come paramentro in questo caso si chiama $id, quindi da ora il numero della posizione sarà $id.
    $data = [ //questo è un esempio di array, per dirgli come leggerli.
        'id' => $id 
    ];
    return view('prodotto' , $data);
})->name('prodotto');

Route::get('/', 'ProductController@index')->name('home');




