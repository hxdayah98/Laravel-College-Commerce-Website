<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('235ceb10', 'zQUM1kI21gPuaE6f');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '60192902562',
            'from' => 'Colcom UiTM',
            'text' => 'Hello Colcom Admin! There is a new order incoming!'
        ]);
    }
}
