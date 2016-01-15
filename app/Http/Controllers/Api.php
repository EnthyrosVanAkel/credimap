<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Micro;

class Api extends Controller
{
    //
    //
    public function mapas(){
        $microfinacieras = Micro::all();
        return $microfinacieras;
    }
}
