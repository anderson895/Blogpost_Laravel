<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'author', 'title', 'content', 'thumbnail', // Added 'user_id' here
    ];
}
