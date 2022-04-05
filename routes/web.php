<?php

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

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/task/{task}', function ($slug) {
    $path = __DIR__ . "/../resources/tasks/{$slug}.html";

    if (! file_exists($path)) {
        abort(404);
    }

    $task = file_get_contents($path);

    return view('task', [
        'task' => $task
    ]);
})->where('task', '[A-z_\-]+');
