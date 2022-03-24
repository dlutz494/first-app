<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_complete',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'is_complete' => 'boolean',
    ];

    public function getTask()
    {

    }
}
