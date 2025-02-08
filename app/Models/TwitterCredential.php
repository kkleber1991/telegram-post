<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwitterCredential extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'api_key',
        'api_key_secret',
        'access_token',
        'access_token_secret',
        'bearer_token'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 