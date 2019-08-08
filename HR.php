<?php

class HR implements TeamleadObserver
{
    private $countReprimand;

    public function getCountReprimand()
    {
        return $this->countReprimand;
    }

    public function reprimand()
    {
        $this->countReprimand++;
    }

    public function compliment()
    {
       
    }

}