<?php

class Army{
    private string $army_level;
    private string $army_name;

//    @param string army_level;
//    @param string $army_name;

    public function __construct(string $army_level, string $army_name){
        $this->army_level = $army_level;
        $this->army_name = $army_name;
    }

    public function getArmyName(): string
    {
        return $this->army_name;
    }

    public function setArmyName(string $army_name): void
    {
        $this->army_name = $army_name;
    }

    public function getArmyLevel(): string
    {
        return $this->army_level;
    }

    public function setArmyLevel(string $army_level): void
    {
        $this->army_level = $army_level;
    }
    public function __toString(): string {
        return "Armée : {$this->army_level}, Level: {$this->army_name}";
    }
}




