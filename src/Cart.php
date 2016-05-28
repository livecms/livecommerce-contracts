<?php

namespace LiveCommerce\Contracts;

interface Cart
{
    public function addProduct(Product $product);

    public function updateProduct(Product $product, $quantity, $options);

    public function removeProduct(Product $product);

    public function getProducts();

    public function getCount();

    public function getSum();

    public function getTotal();
}
