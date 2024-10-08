<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'song_id', 'content'];

    // Quan hệ ngược lại với User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ ngược lại với Song
    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}

