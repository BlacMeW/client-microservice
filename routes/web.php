<?php
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/process', [ClientController::class, 'handleRequest']);


Route::get('/', function () {
    return view('welcome');
});
