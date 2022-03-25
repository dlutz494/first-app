<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected string $name;
    protected string $description;
    protected bool $status;

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'status' => 'bool',
    ];

    public function getName() : string
    {
        return $this->name;
    }


    public function getDescription() : string
    {
        return $this->description;
    }

    public function getStatus() : string
    {
        return $this->status;
    }

}
