<?php
if (isset($_GET['op'])) {
    $op = $_GET['op'];
    $input = array("peter" => 35, "Ben" => 37, "joe" => 43);

    switch ($op) {
        case 1:
            // Flip keys and values
            $flipped = array_flip($input);
            print_r($flipped);
            break;

        case 2:

            $keys = array_keys($input);
            shuffle($keys);
            $shuffled = [];
            foreach ($keys as $key) {
                $shuffled[$key] = $input[$key];
            }
            print_r($shuffled);
            break;

        default:
            echo "Invalid choice";
            break;
    }
} else {
    echo "Please select an option.";
}
?>

