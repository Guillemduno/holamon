<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "holamon";

    // Crea la connexió a la base de dades
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Comprova la connexió
    if ($conn->connect_error) {
    die("La connexió a fallat: " . $conn->connect_error);
    }

    $sql = "SELECT codi, missatge FROM idiomes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            $idiomes[]              = $row["codi"]; // Llista blanca idiomes.
            $textos[$row["codi"]]   = $row["missatge"];
        }
    } 
    $conn->close();
?>