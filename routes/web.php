<?php

use App\Models\Client;
use App\View\Components\Menu;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome', [
        'clients' => Client::all(),
        'items' => Menu::getCategories()
    ]);
});

Route::get('/clients', function () {

    return view('welcome', [
        'clients' => Client::all()
    ]);
});

Route::get('/clients/{id}', function ($id) {

    $client = client::findOrFail($id);

    return view('clients', [
        'client' => $client
    ]);

})->whereNumber('id');