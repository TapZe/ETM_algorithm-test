<?php
function longestWord($sentence) {
    $longestWord = "";
    $maxLength = 0;

    // Split sentence into separate word
    $words = explode(" ", $sentence); // By looking at the spaces in between
    
    // Iterate for each word in the sentence
    foreach ($words as $word) {
        $length = strlen($word);
        
        // Update when the new longest is found
        if ($length > $maxLength) {
            $longestWord = $word;
            $maxLength = $length;
        }
    }
    
    return $longestWord;
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";
$result = longestWord($sentence);
echo "Longest word: " . $result . "\n";