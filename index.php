<?php
function calc($x, $y)
{
    $tong=$x+$y;
    $hieu=$x-$y;
    echo "$tong và $hieu";
    if (!$x && !$y) {
        throw new Exception('Division by zero.');
    }
    return 1 / $tong;
}
try {
    echo calc(1, 3) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

// Continue execution
echo "Hello World\n";
