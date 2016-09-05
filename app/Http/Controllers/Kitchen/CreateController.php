<?php

namespace App\Http\Controllers\kitchen;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    //

    public function index($step)
    {


        switch($step) {

            case 1:
                //$this->saveBasicDetails();
                break;
            case 2:
                //$this->saveMetaDescription();
                break;
            case 3:
                //$this->saveGallery();
                break;
            default:

                break;
        }

        return view('kitchen.create.step'. $step );

    }
}
