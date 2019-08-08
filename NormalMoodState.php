<?php 

class NormalMoodState implements State
{
    public function moveToNextState(Teamlead $teamlead)
    {
        $teamlead->setState(new GoodMoodState());
    }

    public function moveToPreviousState(Teamlead $teamlead)
    {
        $teamlead->setState(new BadMoodState());
    }

    public function message(): string
    {
        return 'You must be stronger than you imagine you can be.';
    }
}