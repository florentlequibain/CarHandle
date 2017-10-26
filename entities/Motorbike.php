<?php

// VERIF TYPE
declare(strict_types=1);


// MOTORBIKE

class Motorbike extends Vehicule{

  protected $luggageRestColor;


// GETTERS
    /**
     * Get the value of Luggage Rest Color
     *
     * @return mixed
     */
    public function getLuggageRestColor()
    {
        return $this->luggageRestColor;
    }


// SETTERS
    /**
     * Set the value of Luggage Rest Color
     *
     * @param mixed luggageRestColor
     *
     * @return self
     */
    public function setLuggageRestColor(string $luggageRestColor)
    {
        $this->luggageRestColor = $luggageRestColor;

        return $this;
    }

}


 ?>
