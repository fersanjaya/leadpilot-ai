<?php

namespace Database\Seeders;

use App\Enums\AiAnalysisStatus;
use App\Enums\LeadPriority;
use App\Enums\LeadStatus;
use App\Models\Lead;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lead::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'phone' => '08123456789',
            'company_name' => 'Budi Travel',
            'service_interest' => 'Paket Umrah',
            'message' => 'Saya ingin tanya paket umrah keluarga untuk 4 orang bulan Desember. Bisa kirim detail harga?',
            'source' => 'website',
            'status' => LeadStatus::Pending,
            'priority' => LeadPriority::High,
            'ai_status' => AiAnalysisStatus::Completed,
            'ai_summary' => 'Lead menanyakan paket umrah keluarga untuk 4 orang.',
            'ai_suggested_reply' => 'Halo Pak Budi, terima kasih sudah menghubungi kami. Kami akan bantu kirimkan detail paket umrah keluarga sesuai kebutuhan Bapak.',
            'ai_confidence_score' => 0.90,
            'ai_category' => 'sales_inquiry',
            'ai_intent' => 'pricing_request',
            'consent_accepted_at' => now(),
        ]);

        Lead::create([
            'name' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'phone' => '082111222333',
            'company_name' => null,
            'service_interest' => 'Konsultasi Layanan',
            'message' => 'Halo, saya ingin tahu layanan apa saja yang tersedia.',
            'source' => 'landing_page',
            'status' => LeadStatus::Pending,
            'priority' => LeadPriority::Medium,
            'ai_status' => AiAnalysisStatus::Completed,
            'ai_summary' => 'Lead bertanya secara umum tentang layanan yang tersedia.',
            'ai_suggested_reply' => 'Halo Bu Siti, terima kasih sudah menghubungi kami. Dengan senang hati kami akan jelaskan layanan yang tersedia.',
            'ai_confidence_score' => 0.75,
            'ai_category' => 'sales_inquiry',
            'ai_intent' => 'general_question',
            'consent_accepted_at' => now(),
        ]);

        Lead::create([
            'name' => 'Random User',
            'email' => 'random@example.com',
            'phone' => null,
            'company_name' => null,
            'service_interest' => null,
            'message' => 'Info dong.',
            'source' => 'website',
            'status' => LeadStatus::Pending,
            'priority' => LeadPriority::Low,
            'ai_status' => AiAnalysisStatus::Completed,
            'ai_summary' => 'Lead memberikan pesan yang terlalu umum.',
            'ai_suggested_reply' => 'Halo, terima kasih sudah menghubungi kami. Boleh kami tahu informasi layanan apa yang Anda butuhkan?',
            'ai_confidence_score' => 0.60,
            'ai_category' => 'other',
            'ai_intent' => 'unknown',
            'consent_accepted_at' => now(),
        ]);
    }
}
