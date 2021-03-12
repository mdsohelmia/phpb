<?php


namespace App;


class Page
{
    protected string $title = 'hello';

    public function getTitle(string $title): string
    {
        return $this->title;
    }
}