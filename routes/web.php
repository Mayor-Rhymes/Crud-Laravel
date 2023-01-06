<?php

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotesController;

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

Route::get('/', [NotesController::class, 'index']);

Route::get('/notes/create', [NotesController::class, 'create']);
Route::get('/notes/manage', [NotesController::class, 'manage']);

Route::delete('/notes/{note}/delete', [NotesController::class, 'destroy']);


Route::get('/notes/{note}', [NotesController::class, 'show']);





Route::post('/notes', [NotesController::class, 'store']);





Route::get('/notes/{note}/edit', [NotesController::class, 'edit']);


Route::put('/notes/{note}/update', [NotesController::class, 'update']);


Route::get('/register', [UserController::class, 'index']);


Route::post('/users', [UserController::class, 'store']);


Route::post('/logout', [UserController::class, 'logout']);


Route::get('/login', [UserController::class, 'login']);


Route::post('/users/authenticate', [UserController::class, 'authenticate']);

