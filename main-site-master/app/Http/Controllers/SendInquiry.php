<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendInquiry extends Controller
{
    function index()
    {
     return view('contact');
    }

    function send(Request $request)
    {

    }
}
