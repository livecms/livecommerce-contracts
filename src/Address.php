<?php

namespace LiveCommerce\Contracts;

interface Address
{
    public function getName();

    public function getPhone();

    public function getEmail();

    public function getAddress1();

    public function getAddress2();

    public function getCountry();

    public function getProvince();

    public function getCity();

    public function getDistrict();

    public function getSubdistrict();
}
