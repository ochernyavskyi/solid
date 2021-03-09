<?php


class OrderRepository
{
    private $source;

    public function setSource(IOrderSource $source)
    {
        $this->source = $source;
    }

    public function load($orderID)
    {
        return $this->source->load($orderID);
    }

    public function save($order)
    {

    }

    public function update($order)
    {

    }
}