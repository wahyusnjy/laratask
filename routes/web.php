<?php

use App\Http\Controllers\TaskListController;
use App\Models\TaskList;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task',[TaskListController::class, 'index']);
Route::post('/task/post', [TaskListController::class, 'store'])->name('task.post');
Route::post('/task/update/{id}', [TaskListController::class, 'update']);
Route::get('/task/destroy/{id}', [TaskListController::class, 'destroy']);
