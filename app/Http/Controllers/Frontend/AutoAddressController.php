<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutoAddressController extends Controller
{
    public function googleAutoAddress()
    {
    	return view('frontend.testmap');
    }
}
