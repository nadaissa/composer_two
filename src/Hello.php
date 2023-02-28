<?php
namespace App;
class Hello {
    private string $sentence;

    public function __construct(string $sentence)
    {
        $this->sentence=$sentence;
    }

    public function getSentence()
    {
        return $this->sentence;
    }

}