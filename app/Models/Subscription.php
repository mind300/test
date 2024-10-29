<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_email',
        'client_full_name',
        'client_phone_number',
        'frequency',
        'plan_name',
        'amount_cents',
        'starts_at',
        'next_billing',
        'reminder_date',
        'state',
        'hmac',
        'paymob_request_id',
        'transaction_id',
        'card_token',
        'masked_pan',
    ];
}
