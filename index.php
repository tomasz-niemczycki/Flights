<?php
    $conn = mysqli_connect('localhost', 'root', '', 'spaceinc');
    $queryAll = "SELECT * FROM flights";
    $queryShip = 'SELECT * FROM flights WHERE ship = "FALCON 9 BLOCK 5"';
    
    $queryResults = [];

    define('Message', "You need to choose something in order to show space flights");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Flights</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Comming Flights:</h1>
        <form action="index.php" method="get">
            <label for="all">All</label>
            <input type="radio" name="poll" id="all" value='all'>
            <label for="poll">Ship</label>
            <input type="radio" name="poll" id="poll1" value='ship'>
            <input type="text" name="text" id="text">
            <button type="submit" name="submit">Check</button>
        </form>
    <table>
<!--Script for showing results-->
        <?php

if(!isset($_GET['poll']) && isset($_GET['submit'])) {
    echo Message;
}
    
   else if($_GET['poll'] == 'all') {
        $_GET['poll'] = $queryResults;
        if(isset($_GET['poll']) || isset($_GET['submit'])) {
            $resultAll = mysqli_query($conn, $queryAll);
        
        while($row = mysqli_fetch_array($resultAll)) { 

            echo "<tr>";
                echo "<th>Mission</th>";
                echo "<th>Type</th>";
                echo "<th>Payload</th>";
                echo "<th>Date</th>";
                echo "<th>Window</th>";
                echo "<th>Ship</th>";
                echo "<th>Propability</th>";
            echo "</tr>";    
                
            echo "<tr>"; 
                echo "<td>"; 
                    echo $row[1] . " "; 
                echo "</td>"; 
                echo "<td>"; 
                    echo $row[2] . " "; 
                echo "</td>";
                echo "<td>"; 
                    echo $row[3] . " "; 
                echo "</td>"; 
                    echo "<td>"; 
                echo $row[4] . " "; 
                    echo "</td>"; 
                echo "<td>"; 
                    echo $row[5] . " "; 
                echo "</td>"; 
                echo "<td>"; 
                    echo $row[6] . " "; 
                echo "</td>"; 
                echo "<td>"; 
                    echo $row[7] . " "; 
                echo "</td>"; 
            echo "</tr>"; };
    }
}

else if($_GET['poll'] == 'ship') {
    $_GET['poll'] = $queryResults;
    if(isset($_GET['poll']) || isset($_GET['submit'])) {
        $resultShip = mysqli_query($conn, $queryShip);
        while($row = mysqli_fetch_array($resultShip)) { 

        echo "<tr>";
            echo "<th>Mission</th>";
            echo "<th>Type</th>";
            echo "<th>Payload</th>";
            echo "<th>Date</th>";
            echo "<th>Window</th>";
            echo "<th>Ship</th>";
            echo "<th>Propability</th>";
        echo "</tr>";    

            echo "<tr>"; 
                echo "<td>"; 
                    echo $row[1] . " "; 
                echo "</td>"; 
                echo "<td>"; 
                    echo $row[2] . " "; 
                echo "</td>";
                echo "<td>"; 
                    echo $row[3] . " "; 
                echo "</td>"; 
                    echo "<td>"; 
                echo $row[4] . " "; 
                    echo "</td>"; 
                echo "<td>"; 
                    echo $row[5] . " "; 
                echo "</td>"; 
                echo "<td>"; 
                    echo $row[6] . " "; 
                echo "</td>"; 
                echo "<td>"; 
                    echo $row[7] . " "; 
                echo "</td>"; 
            echo "</tr>"; };
    }
}
        ?>
    </table>
</body>
</html>