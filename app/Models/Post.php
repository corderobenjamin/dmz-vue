<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'extract',
        'body',
        'main_image',
        'category_id',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }


    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
