<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_time', 'LIKE' ,'%2024-02-15%')->get();

        return view('index', compact('trains'));
    }
}
