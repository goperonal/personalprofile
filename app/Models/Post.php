<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'is_published',
        'is_featured',
        'meta_description',
        'user_id'
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo( User::class);
    }

    public function getFormatedDate(): string
    {
        return $this->created_at->format('F jS Y');
    }

    public function excerpt(): string
    {
        return Str::words(strip_tags($this->content), 50, '...');
    }
}
