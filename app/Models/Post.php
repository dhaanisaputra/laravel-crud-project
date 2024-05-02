<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable value from fields that we made before inside database/Migration
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}
