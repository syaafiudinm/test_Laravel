<?php

use App\Http\Controllers\StudentsController;
use App\Models\Student;
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

Route::get('/',[StudentsController::class, 'index']);
Route::get('/filter',[StudentsController::class, 'filter']);

Route::get('/greeting/{id}',[StudentsController::class, 'show']);


