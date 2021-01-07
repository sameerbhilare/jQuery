<?php
 // echo date('Y-m-d H:i:s');

if (isset($_GET['name'])) {
    $name = "GET " . $_GET['name'];
    
} else if (isset($_POST['name'])) {
    $name = "POST " . $_POST['name'];
    
} else {
    $name = "Just default data ".rand(1, 1000);
}

echo $name;
?>