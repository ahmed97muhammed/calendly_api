<?php

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
/*
https://packagist.org/packages/meilleursbiens/laravel-calendly-wrapper
composer require meilleursbiens/laravel-calendly-wrapper
php artisan vendor:publish --provider="MeilleursBiens\CalendlyServiceProvider" --tag="config"
*/
Route::get('/', function () {
    Calendly::users()->me();
    $gets = Calendly::users()->get();
    dd($gets);
    return view('welcome');
});

