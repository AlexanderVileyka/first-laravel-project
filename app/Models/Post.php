<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int    $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $poster
 * @property string $created_add
 * @property string $updated_add
 */

class Post extends Model
{
    use HasFactory;
protected array $dates = ['created_at'];

public function getRouteKeyName(): string
{
    return 'slug';
}

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
