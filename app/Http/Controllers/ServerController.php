<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function awake()
    {
        $response = [
            'state' => 'server Awaken',
        ];
        return response($response, 200);
    }
}
