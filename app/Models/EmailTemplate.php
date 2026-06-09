<?php

namespace App\Models;

use App\Enums\EmailType;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $fillable = [
        'name',
        'type',
        'subject',
        'body',
        'is_active',
    ];

    protected $casts = [
        'type' => EmailType::class,
        'is_active' => 'boolean',
    ];
}
