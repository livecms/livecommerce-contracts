<?php

namespace LiveCommerce\Contracts;

interface Order
{
    public function setDestination(Address $address);

    public function isPaid();

    public function getPaid();

    public function getUnpaid();

    public function getStatus();

    public function setShipment(Shipment $shipment);

    public function getShipment();

    public function getSubtotal();

    public function getTotal();

    public function setVoucher(Voucher $voucher);
}
