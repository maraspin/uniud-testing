<?php declare(strict_types=1);

class Caldaia
{

	private $workingStatus;

    public function __construct() { 
    	$this->workingStatus = rand(0,1);
    }

    public function avvia(): string
    {
        return ($this->workingStatus?"Funziona":"NON Funziona!");
    }
}