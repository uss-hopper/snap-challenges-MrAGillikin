<?php

class clasher {
	private $combatantA = 10;
	private $combatantB = 10;
	private $predictedResult;

	public function getCombatantA(): int {
		return ($this->combatantA);
	}

	public function getCombatantB(): int {
		return ($this->combatantB);
	}

	public function setCombatantA(int $newCombatantA): void {
		$this->combatantA = $newCombatantA;
	}

	public function setCombatantB(int $newCombatantB): void {
		$this->combatantB = $newCombatantB;
	}

	public function prediction(): string{
		if ($this->combatantA > $this->combatantB){
			$this->predictedResult = "A is the likely winner.";
			return $this->predictedResult;
		} else if ($this->combatantB > $this-> combatantA){
			$this->predictedResult = "B is the likely winner.";
			return $this->predictedResult;
		} else {
			$this->predictedResult = "Results uncertain.";
			return $this->predictedResult;
		}
	}

}
