<?php

namespace App\Http\Controllers\TestingZone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestingZoneController extends Controller
{
    public function welcome(Request $request)
    {
        return view('testing.welcome', $request);
    }
}
