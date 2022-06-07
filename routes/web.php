<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

/* Route::get('/add', function () {
    return view('add');
}); */

Route::get('/', [NoteController::class, 'view']);
Route::get('add', [NoteController::class, 'add']);
Route::get('edit/{id}', [NoteController::class, 'edit']);

Route::get('delete/{id}', [NoteController::class, 'destroy']);
Route::post('form-submit', [NoteController::class, 'create_update']);
