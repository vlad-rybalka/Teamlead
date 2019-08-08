<?php 

class Teamlead 
{

    private $state;
    private $observers;

    public function __construct()
    {
        $this->state = new NormalMoodState();
        $this->observers = new \SplObjectStorage;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function changeState(int $signal)
    {
        if($signal === 1) 
            $this->moveToNextState(); 
        else
            $this->moveToPreviousState(); 
    }

    public function moveToNextState()
    {
        $this->state->moveToNextState($this);
    }

    public function moveToPreviousState()
    {
        $this->state->moveToPreviousState($this);
    }

    public function message():string
    {
        return $this->state->message();
    }

    public function attach(TeamleadObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(TeamleadObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function reprimand()
    {
        foreach ($this->observers as $observer) {
            $observer->reprimand($this);
        }
    }

    public function compliment()
    {
        foreach ($this->observers as $observer) {
            $observer->compliment($this);
        }
    }
}