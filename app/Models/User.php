<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    // Quan hệ 1-n với Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Quan hệ 1-n với Like
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Quan hệ 1-n với Rating
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    // Quan hệ 1-n với UserContribution
    public function contributions()
    {
        return $this->hasMany(UserContribution::class);
    }

    // Quan hệ n-n với Playlist qua PlaylistSong
    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }
}
