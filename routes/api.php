<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//list all posts route
Route::get('/posts',([PostController::class,'index']))
        ->name('all.posts');

//list single post route
Route::get('/posts/{id}/show',([PostController::class,'show']))
       ->name('posts.show');

//create new posts route
Route::post('/posts',([PostController::class,'store']))
        ->name('posts.store');

//update posts route        
Route::put('/posts/{id}/update',([PostController::class,'store']))
       ->name('posts.update');

//destroy post route
Route::delete('/posts/{id}/destroy',([PostController::class,'destroy']))
       ->name('posts.destroy');       