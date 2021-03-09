<?php


class Square extends AbstractShape
{
    private $sideLength;

    public function setSideLength(int $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function Area(): int
    {
        return $this->sideLength * $this->sideLength;
    }
}