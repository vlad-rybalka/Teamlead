<?php

interface State
{
    public function moveToNextState(Teamlead $teamlead);

    public function moveToPreviousState(Teamlead $teamlead);

    public function message():string;

}