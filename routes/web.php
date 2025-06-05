<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\VerifyContentAccess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('content.index');

});

//Route::post('forms/{form}', 'Form@process');

Route::get('/{slug}', [PageController::class, 'show'])->where('slug', '.*');