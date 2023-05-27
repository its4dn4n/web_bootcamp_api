<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
  */

// Fisrt session
Route::post("/user",[Controller::class,"create"]);
Route::get("/user/{id}",[Controller::class,"show"]);
Route::get("/users",[Controller::class,"index"]);

// Routing session
Route::get('/user', function (Request $request) {
    return "hello adel";
  });
  