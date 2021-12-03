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




// Орабатывает главную страницу
Route::get('/', function () {
    return view('home');
})->name('home');



// Обрабатывает страницу страницу формы 
Route::get('/form', function () {
    return view('form');
})->name('form');


// ->name('form-submit') слушает форму/анкету, при нажатии на кнопу Отпарвить обрабатывает @submit в /http/contollers/FormController.php

// Получение по id
Route::get('/form/all/{id}', 'App\Http\Controllers\FormController@showOneData')->name('form-data-one');

// Получение по id
Route::get(
    '/form/all/{id}/delete', 
    'App\Http\Controllers\FormController@deleteData'
)->name('form-delete');

// Вывод всех елементов
Route::get('/admin', 'App\Http\Controllers\FormController@allData')->name('form-data');

Route::post('/form/submit', 'App\Http\Controllers\FormController@submit')->name('form-submit');

