<?php 

class TerribleMoodState implements State
{
    public function moveToNextState(Teamlead $teamlead)
    {
        $teamlead->setState(new BadMoodState());
    }

    public function moveToPreviousState(Teamlead $teamlead)
    {
        $teamlead->reprimand();
    }

    public function message(): string
    {
        return 'Hasta la vista, baby!';
    }
}