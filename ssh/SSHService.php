<?php

namespace mbakgor\TerminalPlugin\ssh;

use phpseclib3\Net\SSH2;

class SSHService
{
    public function connect($host, $port, $username, $password)
    {
        $ssh = new SSH2($host, $port);
        if (!$ssh->login($username, $password)) {
            throw new \Exception('Login Failed');
        }
        return $ssh;
    }

    
    public function executeCommand($ssh, $command)
    {
        return $ssh->exec($command);
    }
}
