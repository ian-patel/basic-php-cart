<?php

namespace App;

use App\Product;

/**
 * Cart Class
 */
class Cart
{
    /**
     * @var Singleton of instance of this class
     */
    protected static $instance;

    /**
     * Add item to cart
     * Currently we do not have product page,
     * When add to cart button fire, only 1 qty will be added.
     *
     * @param string $item
     * @param integer $qty
     * @return bool
     */
    public function add(string $item, int $qty = 1): bool
    {
        $items = self::get();

        $items[$item] = ($items[$item] ?? 0) + $qty;

        setcookie('cart', json_encode($items));
        return true;
    }

    /**
     * Remove item to cart
     *
     * @param string $item
     * @return bool
     */
    public function remove(string $item): bool
    {
        $items = self::get();
        unset($items[$item]);

        setcookie('cart', json_encode($items));
        return true;
    }

    /**
     * Get items from cart
     *
     * @return void
     */
    public function get()
    {
        $items = [];
        $rawCookie = readCookie('cart');

        if ($rawCookie) {
            $items  = (array)json_decode($rawCookie);
        }

        return $items;
    }

    /**
     * Total number of items in the cart
     *
     * @return int
     */
    public function numberOfItems(): int
    {
        $total = 0;
        foreach (self::get() as $item) {
            $total += $item;
        }

        return $total;
    }

    /**
     * Get total amount of all items
     *
     * @return mixed
     */
    public function total()
    {
        $total = 0;
        foreach (self::get() as $item => $qty) {
            $product = Product::find($item);
            $total += ($product['price'] * $qty);
        }

        return $total;
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
