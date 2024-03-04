<?php

namespace mbakgor\TerminalPlugin\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;


class TerminalPluginController extends Controller
{
    public function index()
    {
        $devices = Device::orderBy("hostname")->get();

        return view('terminal-plugin::index', [
            'devices' => $devices,
        ]);
    }

}



    
