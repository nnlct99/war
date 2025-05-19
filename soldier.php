<?php
class Soldier {
    private string $name;
    private string $rank;
    private bool $isAlive;

//
//     * @param string $name
//     * @param string $rank
//     * @param bool $isAlive
//
    public function __construct(string $name, string $rank) {
        $this->name = $name;
        $this->rank = $rank;
        $this->isAlive = true;
    }

    //Setter
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setRank(string $rank): void {
        $this->rank = $rank;
    }

    public function setStatus(bool $isAlive): void {
        $this->isAlive = $isAlive;
    }


    //Getter
    public function getName(): string {
        return $this->name;
    }

    public function getRank(): string {
        return $this->rank;
    }

    public function getStatus(): bool {
        return $this->isAlive;
    }

    // convert the object to a string
    public function __toString(): string {
        return "Soldat : {$this->name}, Rank: {$this->rank}, Status: " . ($this->getStatus()?"vivant":"mort");
    }
}

