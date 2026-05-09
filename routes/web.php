<?php

use Faker\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
    $name='emad';
        $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    //return view('about')->with('name', $name);
    //return view('about', compact('name'));
    return view('about', compact('name', 'departments'));
});
Route::post('/about', function() {
    $name = $_POST['name'];
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];

    return view('about', compact('name', 'departments'));
});
