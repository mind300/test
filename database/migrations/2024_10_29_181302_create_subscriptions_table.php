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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('client_email');
            $table->string('client_full_name');
            $table->string('client_phone_number');
            $table->integer('frequency');
            $table->string('plan_name');
            $table->integer('amount_cents');
            $table->date('starts_at');
            $table->date('next_billing');
            $table->date('reminder_date');
            $table->string('state');
            $table->string('hmac');
            $table->string('paymob_request_id');
            $table->string('transaction_id');
            $table->string('card_token');
            $table->string('masked_pan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
