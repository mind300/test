<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendMail;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    // Handle transaction processed callback
    public function handleProccessd(Request $request)
    {
        dd($request->all());
        $user = User::find(1);
        $user->notify(new SendMail);
        return response()->json(['Send' => 200]);
    }

    // Handle transaction response callback
    public function handleResponse()
    {
        return response()->json(['Response' => 200]);
    }
}
