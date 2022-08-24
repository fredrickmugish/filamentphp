<?php

namespace App\Models;

use Illuminate\Console\Concerns\InteractsWithIO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Post extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia;

    protected $fillable=['category_id', 'title', 'slug', 'content', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
    ];


    public function category()
        {
            return $this->belongsTo(Category::class);
        }
    
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }
}
