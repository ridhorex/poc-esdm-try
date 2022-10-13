<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voltage;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $voltage_raw = DB::table('voltages')->get();
        $voltages = Voltage::get();
        $response = [
            'voltage_raw' => $voltage_raw,
            'voltages' => $voltages,
        ];
        return view('welcome', $response);
    }
}
