<?php

namespace CI\Controllers;

use Automattic\WooCommerce\Client;
use CI\Models\WooCommerce;

class ApiController {

    /*
     * WooCommerce connection
     */
    private $connection;
    private $config;

    public function __construct()
    {
        $this->config =  new \CI\Config\Config();
        $url = $this->config->get('url');
        $consumer_key = $this->config->get('consumer_key');
        $consumer_secret = $this->config->get('consumer_secret');
        $api_version =$this->config->get('version');

        $arr = [
            'version' => $api_version,
            'wp_api' => true,
            'wp_api_prefix' => '/wp-json/wc/',
            // To support download of a lot of orders.
            'timeout' => 30,
            // This is an error due to some handling of authentication.
            'query_string_auth' => true,
        ];

        $this->connection = new Client($url, $consumer_key, $consumer_secret, $arr);
    }


    public function upload() {
        $wooMdl = new WooCommerce();
        $data = $wooMdl->getData();
        $result = [];
        foreach($data as $product) {
            try {
                $result[] = $this->connection->post('products', $product);
            } catch(\Exception $exception) {
                return $exception->getMessage();
            }
        }
        return $result;
    }


    public function info() {
        try {
           return $this->connection->get('system_status');
        } catch(\Exception $exception) {
            return $exception->getMessage();
        }

    }


}

