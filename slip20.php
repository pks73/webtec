<?php

if (isset($_POST['op'])) {
    $a = $_POST['op'];

    $arr = array("arya" => 1012, "john" => 1016, "tyrian" => 1018, "lucifer" => 1045, "hatoda" => 1067);

    if ($a == 1) {
        echo "<br><h3>Splitting array into chunks</h3><br>";

        echo "Before splitting:<br>";
        print_r($arr);


        $chunks = array_chunk($arr, 2, true);

        echo "<br>After splitting into chunks:<br>";
        print_r($chunks);
    } 
    else if ($a == 2) {
        echo "<br><h3>Sorting the array by values without changing the keys (ascending order)</h3><br>";

        echo "Before sorting:<br>";
        print_r($arr);


        asort($arr);

        echo "<br>After sorting:<br>";
        print_r($arr);
    }
    else if ($a == 3) {
        echo "<br><h3>Filtering the even elements from the array</h3><br>";

        echo "Before filtering:<br>";
        print_r($arr);

        function isEven($v) {
            return ($v % 2 == 0);
        }

        $filtered = array_filter($arr, "isEven");

        echo "<br>After filtering (only even values):<br>";
        print_r($filtered);
    } 
    else {
        echo "Invalid option selected.";
    }
} else {
    echo "Please select an option.";
}
?>

