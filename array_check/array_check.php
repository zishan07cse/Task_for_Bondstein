<?php
function twoSum($nums, $target) {
    // Create an associative array to store the difference and its index
    $numDict = array();

    // Iterate through the array
    foreach ($nums as $i => $num) {
        // Check if the current number's complement exists in the dictionary
        $complement = $target - $num;
        if (array_key_exists($complement, $numDict)) {
            // Return the indices of the two numbers that sum up to the target
            return "Found";
        }

        // If not, add the current number and its index to the dictionary
        $numDict[$num] = $i;
    }

    // If no solution is found
    return "Not found";
}

// Example usage:
$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
print_r($result); 