<?php

class Manager implements TeamleadObserver
{
    private $countCompliments;

    public function getCountCompliments()
    {
        return $this->countCompliments;
    }

    public function reprimand()
    {
        
    }

    public function compliment()
    {
        $this->countCompliments++;
    }

}