<?php


class Rectangle extends AbstractShape
{
    private $height;
    private $width;

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    public function Area(): int
    {
        return $this->height * $this->width;
    }
}