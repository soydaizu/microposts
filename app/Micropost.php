<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function favorites(){
        return $this->belongsToMany(Micropost::class, 'user_favorite', 'post_id', 'user_id')->withTimestamps();
    }
}