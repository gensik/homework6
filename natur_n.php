<?php


function natur($n){

   echo $n % 10 . ' ';

    if($n = (int) ($n / 10)) {

        natur($n);
    }
}

natur(5671);
