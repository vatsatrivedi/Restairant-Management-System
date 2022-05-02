<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"])->middleware('auth','verified');
Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::post("/uploadfood",[AdminController::class,"uploadfood"]);
Route::post("/update/{id}",[AdminController::class,"update"]);
Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);
Route::get("/updateview/{id}",[AdminController::class,"updateview"]);
Route::post("/reservation",[AdminController::class,"reservation"]);
Route::get("/viewreservation",[AdminController::class,"viewreservation"]);
Route::get("/viewchief",[AdminController::class,"viewchief"]);
Route::post("/uploadchief",[AdminController::class,"uploadchief"]);
Route::get("/updatechief/{id}",[AdminController::class,"updatechief"]);
Route::post("/updatefoodchief/{id}",[AdminController::class,"updatefoodchief"]);
Route::get("/deletechief/{id}",[AdminController::class,"deletechief"]);
Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/orders",[AdminController::class,"orders"]);

Route::get("/remove/{id}",[HomeController::class,"remove"]);

Route::get("/search",[HomeController::class,"search"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
