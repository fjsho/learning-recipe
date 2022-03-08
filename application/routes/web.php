<?php

//use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//動作確認のため追加
// Route::resource('projects', ProjectController::class)
//     ->middleware(['auth']);

// Route::resource('projects/{project}/tasks', TaskController::class)
//     ->middleware(['auth']);

//tasksをproject経由させずに表示
Route::resource('tasks', TaskController::class)
    ->middleware(['auth']);

//Post用
    Route::resource('posts', PostController::class)
    ->middleware(['auth']);
