<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use App\Notifications\SendMail;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    // Handle transaction processed callback
    public function handleProccessd(Request $request)
    {
        $data = $request->json()->all();

        // Check the trigger type
        if ($data['trigger_type'] === 'Subscription Created') {
            $this->saveSubscriptionData($data);
        }
    }

    // Handle transaction response callback
    public function handleResponse()
    {
        return response()->json(['Response' => 200]);
    }

    // Create a new subscription record
    protected function saveSubscriptionData($data)
    {
        Subscription::create([
            'client_email' => $data['subscription_data']['client_info']['email'],
            'client_full_name' => $data['subscription_data']['client_info']['full_name'],
            'client_phone_number' => $data['subscription_data']['client_info']['phone_number'],
            'frequency' => $data['subscription_data']['frequency'],
            'plan_name' => $data['subscription_data']['name'],
            'amount_cents' => $data['subscription_data']['amount_cents'],
            'starts_at' => $data['subscription_data']['starts_at'],
            'next_billing' => $data['subscription_data']['next_billing'],
            'reminder_date' => $data['subscription_data']['reminder_date'],
            'state' => $data['subscription_data']['state'],
            'hmac' => $data['hmac'],
            'paymob_request_id' => $data['paymob_request_id'],
            'transaction_id' => $data['transaction_id'],
            'card_token' => $data['card_data']['token'],
            'masked_pan' => $data['card_data']['masked_pan'],
        ]);
    }
}
