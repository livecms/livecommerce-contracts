<?php

namespace LiveCommerce\Contracts;

interface Product
{
    public function getPrice();

    public function getRegularPrice();

    public function getStock();
}
