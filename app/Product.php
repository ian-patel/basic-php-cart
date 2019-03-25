<?php

namespace App;

/**
 * Product Class
 */
class Product
{
    /**
     * @var Singleton of instance of this class
     */
    protected static $instance;

    /**
     * Hard coded Products
     *
     * @var array
     */
    const PRODUCTS = [
        [
            "name" => "Sledgehammer",
            "price" => 125.75,
        ],
        [
            "name" => "Axe",
            "price" => 190.50,
        ],
        [
            "name" => "Bandsaw",
            "price" => 562.131,
        ],
        [
            "name" => "Chisel",
            "price" => 12.9,
        ],
        [
            "name" => "Hacksaw",
            "price" => 18.45,
        ],
    ];

    /**
     * Get all products
     *
     * @return array
     */
    public function get(): array
    {
        return self::PRODUCTS;
    }

    /**
     * Find the product in the list
     *
     * @param string $productName
     * @return array
     */
    public function find(string $productName): ?array
    {
        $products = array_filter(self::get(), function ($product) use ($productName) {
            return $product['name'] == $productName;
        });

        return reset($products);
    }

    /**
     * Handle dynamic static method calls into the method.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return call_user_func_array([static::$instance, $method], $parameters);
    }
}
