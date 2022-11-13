<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::controller(StdentController::class)->group({
    Route::get('/','index');
    Route::get('/edit/{id}','edit');
    Route::get('/create','create');
    Route::get('/show{id}','show');
    Route::get('/store{id}','store');
    Route::get('/uodate/{id}','update');
});