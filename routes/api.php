<?php

use App\Http\Controllers\BookController;
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

Route::prefix("books")->group(function (){
    Route::get("/",[BookController::class,"index"])->name("books.index");
    Route::post("/",[BookController::class,"store"])->name("books.store");
    Route::get("/{id}",[BookController::class,"show"])->name("books.show");
    Route::post("/{id}",[BookController::class,"update"])->name("books.update");
    Route::get("/delete/{id}",[BookController::class,"destroy"])->name("books.destroy");
});

