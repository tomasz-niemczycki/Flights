<?php
    $conn = mysqli_connect('localhost', 'root', '', 'spaceinc');
    $queryAll = "SELECT * FROM flights";
    $queryShip = 'SELECT * FROM flights WHERE ship = "FALCON 9 BLOCK 5"';
    
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
            <label for="poll">Ship</label>
            <input type="radio" name="poll" id="poll">
            <button type="submit" name="submit">Check</button>
        </form>
    <table>
        <tr>
            <th>Type</th>
            <th>Payload</th>
            <th>Date</th>
            <th>Window</th>
            <th>Ship</th>
            <th>Propability</th>
        </tr>
<!--Script for showing results-->
        <?php

            if(isset($_GET['submit']) && isset($_GET['poll'])) { 
                $resultShip = mysqli_query($conn, $queryShip);
             while($row = mysqli_fetch_array($resultShip)) { 
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
                echo "</tr>"; };
            }
             else if(isset($_GET['submit'])) { 
                $resultAll = mysqli_query($conn, $queryAll); 
                while($row = mysqli_fetch_array($resultAll)) { 
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
                    echo "</tr>"; };
            }
        ?>
    </table>
</body>
</html>