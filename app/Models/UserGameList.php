<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserGameList extends Model
{
    /** @use HasFactory<\Database\Factories\UserGameListFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'game_id',
        'status',
        'notes'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
