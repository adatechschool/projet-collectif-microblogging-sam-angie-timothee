<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'published_at', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
