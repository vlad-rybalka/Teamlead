<?php 

class GoodMoodState implements State
{
    public function moveToNextState(Teamlead $teamlead)
    {
        $teamlead->compliment();
    }

    public function moveToPreviousState(Teamlead $teamlead)
    {
        $teamlead->setState(new NormalMoodState());
    }

    public function message(): string
    {
        return 'I`ll be back.';
    }
}