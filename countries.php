<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "CCR");
    if ($conn->$connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_GET["CountrySelect"])){
        $sqlSelect = $conn->prepare("SELECT CountryName from CCR");
        $sqlSelect->execute();
        $sqlSelect->get_result();
    }
?>