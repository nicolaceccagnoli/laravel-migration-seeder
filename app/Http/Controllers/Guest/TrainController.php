<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Impoto Carbon
use Carbon\Carbon;

// Models 
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::all();

        // dd("", $trains);

        return view("trains.trains", compact("trains"));
    }

    public function show() {
        // SELECT * 
        // FROM `trains` 
        // WHERE departure_hour >= 2024-27-02; 

        $today = Carbon::now()->format("Y-m-d");

        // dd($today);

        $todayTrain = Train::where('departure_hour', '>=', $today)->get();

        // dd('', $todayTrain);

        return view('trains.show', compact('todayTrain'));

    }
}
