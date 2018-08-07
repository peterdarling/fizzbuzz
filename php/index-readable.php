<?php
for ($i=1; $i<=100; $i++) {
    if ($i % 3 && $i % 5) {
        echo $i;
    } else {
        if ($i % 3 == 0)
            echo 'Fizz';
        if ($i % 5 == 0)
            echo 'Buzz';
    }
    echo PHP_EOL;
}