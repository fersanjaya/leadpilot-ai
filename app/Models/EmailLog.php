<?php

namespace App\Models;

use App\Enums\EmailStatus;
use App\Enums\EmailType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailLog extends Model
{
    protected $fillable = [
        'lead_id',
        'type',
        'recipient_email',
        'subject',
        'body',
        'status',
        'provider',
        'sent_at',
        'failed_at',
        'error_message',
    ];

    protected $casts = [
        'type' => EmailType::class,
        'status' => EmailStatus::class,
        'sent_at' => 'datetime',
        'failed_at' => 'datetime', 
    ];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }
}
