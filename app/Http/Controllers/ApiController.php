<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class ApiController extends Controller
{
    public function show ()
    {
        $text = "Ha-ha";

        return json_encode($text);
    }
}
