<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
  {
    $title = "Train";
    $trains= Train::where('data_di_partenza', '=', '2023-10-17')->get();
    return view('train', compact('title','trains'));
  }
}