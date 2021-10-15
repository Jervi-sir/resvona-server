<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServerController;


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

// Route::resource('products', ProductController::class);

// Public routes
Route::get('/awake', [ServerController::class, 'awake']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/preview/{uuid}', [UserController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/edit', [UserController::class, 'editPage']);

    //Details
    Route::post('/updateImage', [UserController::class, 'image']);
    Route::post('/updateBio', [UserController::class, 'bio']);
    Route::post('/updateName', [UserController::class, 'name']);
    //Socials
    Route::post('/addSocial', [UserController::class, 'addSocial']);
    Route::post('/editSocial', [UserController::class, 'editSocial']);
    Route::post('/deleteSocial', [UserController::class, 'deleteSocial']);



    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
