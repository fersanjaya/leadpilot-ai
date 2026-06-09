<?php

namespace App\Models;

use App\Enums\AiAnalysisStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiAnalysisLog extends Model
{
    protected $fillable = [
        'lead_id',
        'provider',
        'model',
        'request_payload',
        'raw_response',
        'prompt_tokens',
        'completion_tokens',
        'status',
        'error_message',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'request_payload' => 'array',
        'raw_response' => 'array',
        'status' => AiAnalysisStatus::class,
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }
}
