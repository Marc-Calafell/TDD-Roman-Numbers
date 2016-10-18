<?php

class RomanNumbers
{
    public function convert($number){

        if($number==5) {
            return 'V';

        }

        if($number==10) {
            return 'X';

        }

        return str_repeat("I", $number);

    }

}
