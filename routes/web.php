<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// define a new Route that user can access it throw browser
// define Controller that render a view  
// define a view that contains list of posts
// remove any static html data from view 


Route::get('/test', [TestController::class, 'testAction']);
