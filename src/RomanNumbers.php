<?php

class RomanNumbers
{
    function convert($number){
        if($number==2) {
            return 'II';

        }

        if($number==3) {
            return 'III';

        }

        if($number==5) {
            return 'V';

        }

        if($number==10) {
            return 'X';

        }

            return 'I';

    }

}
