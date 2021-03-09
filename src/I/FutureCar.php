<?php


class FutureCar implements CarInterface, AirplaneInterface
{

    public function drive()
    {
        echo 'Driving a future car!';
    }

    public function fly()
    {
        echo 'Flying a future car!';
    }
}