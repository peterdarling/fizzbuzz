<?php
for ($i = 1; $i <= 100; $i++) {
    $three = $i % 3 === 0;
    $five = $i % 5 === 0;
    echo ($three && $five ? "FizzBuzz":
         ($three ? "Fizz":
         ($five ? "Buzz":
         $i)))
    .(php_sapi_name() === 'cli' ? PHP_EOL : '<br />');
}
