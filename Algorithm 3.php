<?php
function countOccurrences($input, $query) {
    $output = [];

    // Count occurrences of each words inside the query
    foreach ($query as $q) {
        $count = 0; // Reset for each new word
        foreach ($input as $i) {
            if ($i === $q) { // If the word is the same as the input
                $count++; // Increase the number of count
            }
        }
        $output[] = $count; // adding count to the array
    }

    return $output;
}

$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];

$output = countOccurrences($input, $query);
echo "OUTPUT = [" . implode(", ", $output) . "]\n";
print_r($output);