<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[CrudController::class,'showdata']);
Route::get('/adddata',[CrudController::class,'adddata']);
Route::post('/storedata',[CrudController::class,'storedata']);
Route::get('/editdata/{id}',[CrudController::class,'editdata']);
Route::post('/updatedata/{id}',[CrudController::class,'updatedata']);
Route::get('/deletedata/{id}',[CrudController::class,'deletedata']);
