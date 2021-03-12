<?php


namespace App;


class Image
{
    private \Imagick $image;

    public function __construct()
    {
        $this->image = new \Imagick();
    }

}