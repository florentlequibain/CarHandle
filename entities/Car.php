<?php

// VERIF TYPE
declare(strict_types=1);

// CAR
class Car extends Vehicule{

  protected $cabinColor;




// GETTERS
    /**
     * Get the value of Cabin Color
     *
     * @return mixed
     */
    public function getCabinColor()
    {
        return $this->cabinColor;
    }



// SETTERS
    /**
     * Set the value of Cabin Color
     *
     * @param mixed cabinColor
     *
     * @return self
     */
    public function setCabinColor(string $cabinColor)
    {
        $this->cabinColor = $cabinColor;

        return $this;
    }


}


 ?>
