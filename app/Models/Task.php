<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = [
        'title',
        'priority',
        'due_date',
    ];
}
