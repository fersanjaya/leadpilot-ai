<?php

namespace App\Enums;

enum EmailType: string
{
    case Acknowledgement = 'acknowledgement';
    case LeadReply = 'lead_reply';

    public function label(): string
    {
        return match ($this) {
            self::Acknowledgement => 'Acknowledgement',
            self::LeadReply => 'Lead Reply',
        };
    }
}