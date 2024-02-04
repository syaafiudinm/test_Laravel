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

Route::get('/',[StudentsController::class, 'index'])->name('index');
Route::get('/filter',[StudentsController::class, 'filter']);
Route::get('/show/{id}',[StudentsController::class, 'show'])->name('show');
Route::get('/create',[StudentsController::class, 'create'])->name('create');
Route::post('create', [StudentsController::class, 'store'])->name('store');


