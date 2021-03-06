<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'star', 'content', 'position', 'image'
    ];
    public function ReviewData()
    {
    return $this->hasMany('App\Models\ReviewRating','post_id');
    }
}
