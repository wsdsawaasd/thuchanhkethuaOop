<?php


class Squares extends Rectangle1
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}