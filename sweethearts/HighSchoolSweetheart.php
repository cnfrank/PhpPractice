<?php

use function PHPSTORM_META\map;

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        // throw new \BadFunctionCallException('Implement the function');
        return strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        // throw new \BadFunctionCallException('Implement the function');
        $names = explode(' ', $name);
        return $this->initial($names[0]) . ' ' . $this->initial($names[1]);

    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        // throw new \BadFunctionCallException('Implement the function');
        $init_a = $this->initials($sweetheart_a);
        $init_b = $this->initials($sweetheart_b);

        return <<<EXPECTED_HEART
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     $init_a  +  $init_b     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            EXPECTED_HEART;
    }
}
