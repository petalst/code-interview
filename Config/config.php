<?php

namespace CI\Config;

class Config{

    protected $config;

    public function __construct()
    {
        $this->config = [
            'url' => 'https://macobeta.utvikl.es',
            'consumer_key' => 'ck_0076e37d46ae88f01909a4b58591ec8e529733e0',
            'consumer_secret' => 'cs_057902e60f8545ad807c67a5462f11e8974f714b',
            'version' => 'v3'
        ];
    }

    /**
     * @param $param
     * @return mixed
     */
    public function get($param) {
        return $this->config[$param];
    }

    public function set($param, $value) {
        $this->config[$param] = $value;
    }
}