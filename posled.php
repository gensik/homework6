<?php

$n = 10;
$cur = 0;

for ($i = 1; $i <= $n; $i++) {
  
    if ($i > $cur *($cur + 1) /2)
       $cur++;
    echo $cur . ' ';
}
