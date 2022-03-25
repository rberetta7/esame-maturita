<?php
    if(isset($_GET['id']) && isset($_GET['act'])){
        include "dbopen.php";
        $id = $_GET['id'];
        //query da eseguire
        $query = "UPDATE ordinazioni SET act = 1 WHERE idord='$id';";
        //eseguo la query   
        $ris = mysqli_query($dbconn,$query);
        include "dbclose.php";
        header("Refresh:0; url=ordine.php");
    }
    include "dbopen.php";
    //query da eseguire
    
    $query = "SELECT * FROM ordinazioni WHERE act = 0 ORDER BY idord ASC;";
    //eseguo la query   
    $ris = mysqli_query($dbconn,$query);
    //scandisco i risultati                       
    while($riga = mysqli_fetch_array($ris))  {
        $id = $riga['idord'];  
        $pizze = $riga['pizze'];    
        $bibite = $riga['bibite'];    
        $dolci = $riga['dolci'];    
        $tavolo = $riga['codtav']; 
        
        echo "<div class='container'>";
        	if($tavolo == 1){
            	echo "<h2 style='color:red;'>$id - TAVOLO $tavolo</h2>";
            }else if($tavolo == 2){
            	echo "<h2 style='color:green;'>$id - TAVOLO $tavolo</h2>";
            }else if($tavolo == 3){
            	echo "<h2 style='color:blue;'>$id - TAVOLO $tavolo</h2>";
            }else if($tavolo == 4){
            	echo "<h2 style='color:purple;'>$id - TAVOLO $tavolo</h2>";
            }
            echo "<table>"; 
                echo "<tr>";
                    echo "<td id='nome'><b>PIZZE</b></td>";
                    echo "<td id='desc'>$pizze</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td id='nome'><b>BIBITE</b></td>";  
                    echo "<td id='desc'>$bibite</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td id='nome'><b>DOLCI</b></td>";
                    echo "<td id='desc'>$dolci</td>";
                echo "</tr>";
              echo "</table>";  
                echo "<a href='ordine.php?id=$id&act=1'>COMPLETATO</a><br><br>";
            
        echo "</div>";
    }
    include "dbclose.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ORDINAZIONI</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="ordine.css"/>
        <link rel="icon" type="image/png" href="../icon/login.png"/>
    </head>
    <body>
    </body>
</html>