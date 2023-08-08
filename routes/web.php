<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
       'listings'=> [
            [
                'id' => 1,
                'title' =>'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor volutpat ullamcorper. Nullam bibendum aliquet sapien, quis ullamcorper urna efficitur vel. Duis eleifend, nisi eu dignissim varius, risus enim sagittis ipsum',
            ],
            [
                'id' => 2,
                'title' =>'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor volutpat ullamcorper. Nullam bibendum aliquet sapien, quis ullamcorper urna efficitur vel. Duis eleifend, nisi eu dignissim varius, risus enim sagittis ipsum',
            ]
        ]
    ]);
});