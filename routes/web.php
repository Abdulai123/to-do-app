<?php

use App\Http\Controllers\tasksController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Converter\Time\PhpTimeConverter;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('welcome', ['tasks' => Task::all()]);
});

Route::view('/create', 'create_to_do');

Route::post('/', [tasksController::class, 'createTask']);

Route::get('/edit/{task}', [tasksController::class, 'updateTask']);

Route::PUT('/edit/{task}', [tasksController::class, 'update']);

Route::delete('/delete/{id}', [tasksController::class, 'deleteTask']);

