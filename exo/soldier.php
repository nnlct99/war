<?php

class Soldier {
    private string $name;
    private string $rank;
    private bool $isAlive;

    /**
     * @param string $name
     * @param string $rank
     * @param bool $isAlive
     */
    public function __construct(string $name, string $rank, bool $isAlive) {
        $this->name = $name;
        $this->rank = $rank;
        $this->isAlive = $isAlive;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getRank(): string {
        return $this->rank;
    }

    public function setRank(string $rank): void {
        $this->rank = $rank;
    }

    public function setStatus(bool $isAlive): void {
        $this->isAlive = $isAlive;
    }

    public function getStatus(): string {
        return $this->isAlive ? 'alive' : 'dead';
    }

    // Method to convert the object to a string
    public function __toString(): string {
        return "Soldier Name: {$this->name}, Rank: {$this->rank}, Status: " . $this->getStatus();
    }
}

$soldat1 = new Soldier("Jean Marc", "Première Classe", true);

// Output the soldier's details
echo $soldat1; // This will now work correctly
