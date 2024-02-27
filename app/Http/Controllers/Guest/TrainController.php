<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Models 
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::all();

        dd("", $trains);

        return view("trains.trains", compact("trains"));
    }

    public function show() {
        // SELECT * 
        // FROM `trains` 
        // WHERE departure_hour >= 2024-27-02; 

        $todayTrain = Train::where('departure_hour', '>=', '2024-02-27')->get();

        // dd('', $todayTrain);

        return view('trains.show', compact('todayTrain'));

    }
}
