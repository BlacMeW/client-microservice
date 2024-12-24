<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::post('/process', [ClientController::class, 'handleRequest']);

Route::get('/', function () {
    return view('welcome');
});
