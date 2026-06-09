<?php

namespace App\Models;

use App\Enums\AiAnalysisStatus;
use App\Enums\LeadPriority;
use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'service_interest',
        'message',
        'source',
        'status',
        'priority',
        'ai_status',
        'ai_summary',
        'ai_suggested_reply',
        'ai_confidence_score',
        'ai_category',
        'ai_intent',
        'ai_error_message',
        'ip_hash',
        'user_agent',
        'consent_accepted_at',
    ];

    protected $casts = [
        'status' => LeadStatus::class,
        'priority' => LeadPriority::class,
        'ai_status' => AiAnalysisStatus::class,
        'ai_confidence_score' => 'decimal:2',
        'consent_accepted_at' => 'datetime',
    ];

    public function statusHistories(): HasMany
    {
        return $this->hasMany(LeadStatusHistory::class);
    }

    public function aiAnalysisLogs(): HasMany
    {
        return $this->hasMany(AiAnalysisLog::class);
    }

    public function emailLogs(): HasMany
    {
        return $this->hasMany(EmailLog::class);
    }
}
