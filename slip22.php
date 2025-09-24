<?php

if (isset($_POST['op'])) {
    $a = $_POST['op'];


    $arr = array(10, 12, 16, 18, 45, 67);

    if ($a == 1) {
        echo "<h3>Inserting element into queue</h3><br>";
        echo "Array before inserting element:<br>";
        print_r($arr);


        array_push($arr, 100);

        echo "<br>Array after inserting element:<br>";
        print_r($arr);
    } 
    elseif ($a == 2) {
        echo "<h3>Deleting element from queue</h3><br>";
        echo "Array before deleting element:<br>";
        print_r($arr);


        $removed = array_shift($arr);

        echo "<br>Removed element: " . $removed . "<br>";
        echo "Array after deleting element:<br>";
        print_r($arr);
    } 
    elseif ($a == 3) {
        echo "<h3>Displaying current queue</h3><br>";
        print_r($arr);
    } 
    else {
        echo "Invalid option selected.";
    }
} else {
    echo "Please select an option.";
}
?>

