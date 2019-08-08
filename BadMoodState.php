<?php 

class BadMoodState implements State
{
    public function moveToNextState(Teamlead $teamlead)
    {
        $teamlead->setState(new NormalMoodState());
    }

    public function moveToPreviousState(Teamlead $teamlead)
    {
        $teamlead->setState(new TerribleMoodState());
    }

    public function message(): string
    {
        return 'Come with me if you wanna live';
    }
}