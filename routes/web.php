<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $bin = [
        "name"=> "John",
        "age"=> 25
    ];
    return $bin;
});
