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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function(){
    return response('<h1>Hello World</h1>',200)
    ->header('Content-Type', 'text/plain')
    ->header('foo','bar');
});

Route::get('/posts/{id}',function($id){
    //The full name for dd() in Laravel is dump and die. 
    //It is a helper function that is used to dump the contents
    // of a variable to the browser and then stop the script execution
    // dd($id); //dump and die


    //the ddd() helper function is a debugging aid that stands for 
    //"Dump and Die with Data". It's a variation of the dd()
    // (Dump and Die) function, which is commonly used for debugging 
    //purposes in PHP and Laravel applications.
    // ddd($id);
    return response('Post '.$id);
})->where('id','[0-9]+');