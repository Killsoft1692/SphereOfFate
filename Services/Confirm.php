<?php

namespace Acme\SphereOfFateBundle\Services;

class Confirm
{
    public function random()
    {
        $number = rand(1,100);

        if ($number<50) {
            $result = 'No, maybe tomorrow will be your day';

            return $result;
        } else {
            $result = 'Yes, today is your day';

            return $result;
        }
    }
}
