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
        // Handle transaction response callback
        $data = $request->all();
        dd("Response");
        // Process the response data here
    }
}