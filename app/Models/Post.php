<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $filable = [
        'title',
        'slug',
        'content',
        'is_publish',
        'meta_description',
        'user_id'
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo( User::class);
    }
}
