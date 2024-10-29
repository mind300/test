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
        // Process the data as before
    }

    public function handleTransactionResponse(Request $request)
    {
        // Log the incoming data to check what you receive
        \Log::info('Transaction Response Webhook received:', $request->all());

        // Process the GET request data as needed
        // For example, extract parameters from the query string
        $transactionId = $request->query('transaction_id');

        // Implement your logic here
        // ...

        return response()->json(['status' => 'received'], 200);
    }
}
