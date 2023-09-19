<?php

namespace classes;

class Product implements IActionsProduct
{
    public int $id;
    public int $price;
    public int $quantity;
    public string $name;
    public Location $location;
    public int $discount;

    public function __construct()
    {

    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function record($id)
    {
        // TODO: Implement record() method.
    }

    public function recQuantity($id)
    {
        // TODO: Implement recQuantity() method.
    }

    public function recPosition($id)
    {
        // TODO: Implement recPosition() method.
    }

    public function recPrice($id)
    {
        // TODO: Implement recPrice() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}