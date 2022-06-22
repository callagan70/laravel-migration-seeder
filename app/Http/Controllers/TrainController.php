<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = T rain::all();

        return view('pages.trains.train', compact('trains'));
    }
}
