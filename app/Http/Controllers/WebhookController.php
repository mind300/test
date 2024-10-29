<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        // Handle transaction processed callback
        $data = $request->all();
        dd("Processed");
    }

    public function handleTransactionResponse(Request $request)
    {
        // Handle transaction response callback
        $transactionId = $request->query('transaction_id');
        return response()->json(['status' => 'received'], 200);
    }
}
