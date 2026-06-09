<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('service_interest')->nullable();
            $table->string('message');

            $table->string('source')->nullable();

            $table->string('status')->default('pending');
            $table->string('priority')->nullable();

            $table->string('ai_status')->default('pending');
            $table->text('ai_summary')->nullable();
            $table->text('ai_suggested_reply')->nullable();
            $table->decimal('ai_confidence_score', 5, 2)->nullable();
            $table->text('ai_category')->nullable();
            $table->string('ai_intent')->nullable();
            $table->text("ai_error_message")->nullable();

            $table->string('ip_hash')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamp('consent_accepted_at')->nullable();

            $table->timestamps();

            
            $table->index('email');
            $table->index('status');
            $table->index('priority');
            $table->index('ai_status');
            $table->index('source');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
