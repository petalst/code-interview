<?php



    function getPreferredServer()
    {
        $servers = getAvailableServers();
        $preferred = 'maco2'; // The preferred server

        // Return preferred server as a fallback
        return $preferred;
    }

    function getAvailableServers() {
        $servers = [];
        $server =  new stdClass();
        $server->server  = 'maco';
        $server->cpuload  = rand(1,100);
        $server->memory  = rand(1,100);

        $servers[] = $server;

        $server =  new stdClass();
        $server->server  = 'maco2';
        $server->cpuload  = rand(1,100);
        $server->memory  = rand(1,100);

        $servers[] = $server;

        return $servers;
    }



    echo getPreferredServer();

