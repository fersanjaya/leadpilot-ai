<?php

namespace App\Models;

use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LeadStatusHistory extends Model
{
    protected $fillable = [
        'lead_id',
        'old_status',
        'new_status',
        'changed_by',
        'note',
    ];

    protected $casts = [
        'old_status' => LeadStatus::class,
        'new_status' => LeadStatus::class,
    ];
}
