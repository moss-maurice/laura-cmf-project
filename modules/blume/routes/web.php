<?php

use Illuminate\Support\Facades\Route;

Route::get('blume', function () {
    return view('blume::welcome');
});
