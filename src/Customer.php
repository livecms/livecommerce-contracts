<?php

namespace LiveCommerce\Contracts;

interface Customer
{
    public function makeOrder(Order $order);

    public function getOrders();

    public function getAllOrders();

    public function cancelOrder(Order $order);

    public function payOrder(Order $order);

    public function addAddress(Address $address);
}
