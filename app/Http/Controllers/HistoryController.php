<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('history.index');
    }

    public function show(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'nik' => 'required|min:10|numeric',
        ]);
        echo $request['name'];
//        return view('history.index');
    }
}
