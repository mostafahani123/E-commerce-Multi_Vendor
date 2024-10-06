<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //actios
    public function index(){
        //return response: view , json , redirect , file
        $dash = "mostafa";
        // return view('Dashboard', compact('dash'));
        return view('dashbord.index')->with([
            'dash' => $dash,
        ]);

    }
}
