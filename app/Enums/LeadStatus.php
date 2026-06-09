<?php

namespace App\Enums;

enum LeadStatus: string
{
    case Pending = 'pending';
    case Contacted = 'contacted';
    case Converted = 'converted';
    case Lost = 'lost';
    case Spam = 'spam';

    public function label() : string {
        return match ($this) {
            self::Pending => 'Pending',
            self::Contacted => 'Contacted',
            self::Converted => 'Converted',
            self::Lost => 'Lost',
            self::Spam => 'Spam',
        };
    }
}