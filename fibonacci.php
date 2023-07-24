<?php
function fibonacci($n) {
    if ($n < 1 || $n > 20) {
        return "Invalid input. Input 1-20 only";
    }

    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib[$n - 1];
}

$number = readline("Enter a value between 1 and 20: ");
for ($i = 1; $i <= $number; $i++) {
    echo fibonacci($i) . ' ';
}


