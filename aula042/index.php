<?php
for($i = 0; $i < 100; $i++) {
    if($i % 2 == 0) continue;
    echo $i . "<br>";
    if($i >= 50) break;
}