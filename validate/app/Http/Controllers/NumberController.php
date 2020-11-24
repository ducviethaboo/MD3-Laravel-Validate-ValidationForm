<?php

namespace App\Http\Controllers;

use App\Http\Requests\NumberRequest;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function check(NumberRequest $request)
    {
        echo "True";
    }
}
