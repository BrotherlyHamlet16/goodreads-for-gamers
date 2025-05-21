<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_url',
        'release_date',
        'developer',
        'publisher',
        'summary',
        'igdb_id'
    ];

    public function gameLists(): HasMany
    {
        return $this->hasMany(UserGameList::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'game_genre');
    }

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class, 'game_platform');
    }
}
