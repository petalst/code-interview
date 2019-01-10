<?php

namespace CI\Models;


class WooCommerce
{

    public $data;

    public function __construct()
    {

       $this->loadData();

    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }


    private function loadData()
    {

        $this->data = [
            [
                'name' => 'Dressbukse',
                'type' => 'simple',
                'status' => 'publish',
                'sku' => '1200',
                'regular_price' => '2599.90',
                'stock_quantity' => '5',
                'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
                'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'categories' => [
                    [
                        'id' => 16
                    ],
                    [
                        'id' => 17
                    ]
                ]
            ],
            [
                'name' => 'Shorts',
                'type' => 'simple',
                'status' => 'publish',
                'sku' => '1201',
                'regular_price' => '1299.90',
                'stock_quantity' => '9',
                'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
                'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'categories' => [
                    [
                        'id' => 16
                    ],
                    [
                        'id' => 17
                    ]
                ]
            ]
        ];
    }


}