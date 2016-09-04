<?php

namespace App\Http\Controllers\Kitchen;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{

    /**
     * List all the kitchens
     *
     */
    public function index()
    {
        return view('kitchen.list');
    }


}
