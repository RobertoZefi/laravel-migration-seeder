<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index(){
        $currentTime = Carbon::now();
        //echo $currentTime->toDateString();

        $trains = Train::whereDate('orario_di_partenza', $currentTime)->get();

        $data = [
            'trains' => $trains
        ];

        return view('welcome', $data);
    }
}
