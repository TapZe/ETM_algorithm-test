<?php
function diagonalDifference($matrix) {
    $n = count($matrix);
    $primarySum = 0;
    $secondarySum = 0;
    
    // Calculate primary and secondary diagonal sums
    for ($i = 0; $i < $n; $i++) { 
        $primarySum += $matrix[$i][$i]; // Taking the 1,1 2,2 3,3 n,n
        $secondarySum += $matrix[$i][$n - $i - 1]; // Taking the 1,3 2,2 3,1 n,n-(i-1)
    }
    
    // Calculate the difference (can be negative)
    $difference = $primarySum - $secondarySum;
    
    return $difference;
}

// Example matrix
$matrix = [
    [1, 2, 0],
    [4, 5, 6],
    [7, 8, 9]
];

$result = diagonalDifference($matrix);
echo "Result: " . $result . "\n";
