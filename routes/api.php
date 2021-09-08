<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// New version use the models end controllers
Route::get('/comic-books', [ComicController::class, 'index']);

Route::get('/comics/{comic}', [ComicController::class, 'show']);

/*
Route::get('/comic-books', function(){
    // Da inserire nel controller
    return config('db_factory');
});

Route::get('/comics/{id}', function($id=''){
    // Da inserire nel controller
    if($id !== null){
        return config('db_factory')[$id];
    }
});
*/
