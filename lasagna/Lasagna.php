<?php

class Lasagna
{
    const EXPECTED_COOK_TIME=40;
    const AVERAGE_LAYER_PREP_TIME=2;

    public function expectedCookTime()
    {
        // Implement the expectedCookTime method
        return self::EXPECTED_COOK_TIME;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        // Implement the remainingCookTime method
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
        return $layers_to_prep*self::AVERAGE_LAYER_PREP_TIME;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
        return $this->totalPreparationTime($layers_to_prep)+$elapsed_minutes;
    }

    public function alarm()
    {
        // Implement the alarm method
        return "Ding!";
    }
}
