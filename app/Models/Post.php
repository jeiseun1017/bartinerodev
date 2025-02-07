<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];  

    protected $fillable = [
        'title', 'category', 'images', 'description', 'images', 'lookingfor'
    ];

    public function user() {

        return $this->belongsTo(User::class);

    }




}
