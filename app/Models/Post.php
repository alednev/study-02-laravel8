<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // everything is fillable except
    protected $guarded = ['id'];

    // or
    protected $fillable = ['title', 'excerpt', 'body'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}