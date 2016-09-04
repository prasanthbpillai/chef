<?php

namespace App\Http\Controllers\Kitchen;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
    //

    public function index()
    {
        return view('kitchen.details');
    }
}
