<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Task
{
    public $title;
    public $description;
    public $complete_status;
    public $date;

    public function __construct($title, $description, $complete_status, $date)
    {
        $this->title = $title;
        $this->description = $description;
        $this->complete_status = $complete_status;
        $this->date = $date;
    }

    public static function find($slug)
    {
        if (! file_exists($path = resource_path("tasks/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("post.{$slug}", now()->addMinute(), fn() => file_get_contents($path));
    }

    public static function all()
    {
        $files = File::files(resource_path('tasks/'));

        return array_map(fn ($file) => $file->getContents(), $files);
    }
}
