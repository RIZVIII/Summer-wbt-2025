<?php
$numbers = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $search found in the array.";
} else {
    echo "Element $search not found in the array.";
}
?>
