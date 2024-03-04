<?php

namespace mbakgor\TerminalPlugin\Http\Controllers;

use mbakgor\TerminalPlugin\ssh\SSHService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SSHController extends Controller
{
    protected $sshService;

    public function __construct(SSHService $sshService)
    {
        $this->sshService = $sshService;
    }

    public function connect(Request $request)
    {
        $host = $request->input('host');
        $port = $request->input('port', 22); 
        $username = $request->input('username');
        $password = $request->input('password');

        try {
            $ssh = $this->sshService->connect($host, $port, $username, $password);
            
        } catch (\Exception $e) {

            return back()->withErrors(['error' => 'SSH Connection Failed: ' . $e->getMessage()]);
            
        }
    }


}
