<?php

use App\Models\Task;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    $files = File::files(resource_path('tasks/'));
    $tasks = [];

    foreach ($files as $file) {
        $document = YamlFrontMatter::parseFile($file);

        $tasks[] = new Task(
            $document->title,
            $document->description,
            $document->complete_status,
            $document->date
        );
    }

    return view('tasks', [
        'tasks' => $tasks,
    ]);
});

Route::get('/task/{task}', function ($slug) {
    return view('task', [
        'task' => Task::find($slug),
    ]);
})->where('task', '[A-z_\-]+');
