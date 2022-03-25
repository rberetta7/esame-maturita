<?php
    if(!isset($_POST['submit'])){ /* CONTROLLO SE NON HAI COMPILATO FORM */

        if(isset($_GET['t']) && isset($_GET['p'])){ /* CONTROLLO SE HAI INSERITO PARAMETRI */
            $t = $_GET['t'];
            $p = $_GET['p'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ORDINAZIONE</title>
        <link href="prenota.css" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="icon" type="image/png" href="../icon/menu.png"/>
    </head>
    <body>
            
        <h1>N° TAVOLO: <?php echo $t; ?> </h1>
            <div class="ordinazione">
                <?php
                    /* PIZZE */
                    $pizze = array();
                    $prz1 = array();
					//apertura db    
					include "dbopen.php";
					//query da eseguire
					$query = "SELECT nome,prezzo FROM pizze";
					//eseguo la query   
					$ris = mysqli_query($dbconn,$query);
                    //scandisco i risultati                       
					while($riga = mysqli_fetch_array($ris))  {
						$nome = $riga['nome'];  
						$prz = $riga['prezzo'];    
                        array_push($pizze,$nome);/* Inserisco nell'array pizza il nome della pizza*/
                        array_push($prz1,$prz);/* Inserisco nell'array prezzi il prezzo corrispondente */
                    }

                        echo "<table id='table1'>";
                            echo "<tr>";
                                echo "<th>PIZZA</th>";
                                echo "<th>PREZZO</th>";
                                echo "<th></th>";
                            echo "</tr>";
                        $n = sizeof($pizze); /* numero pizze */
                    ?>

                        <script>
                            /* DEFINISCO VARIABILI */
                            var numPizze = <?php echo json_encode($n); ?>;/* LUNGHEZZA ARRAY PIZZE */
                            var n = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
                            var pizze = <?php echo json_encode($pizze); ?>;
                            var prz1 = <?php echo json_encode($prz1); ?>;
                            /* TRASFORMO IN MAIUSCOLO TUTTO */
                            toUpper = function(x){ return x.toUpperCase();   };
                            pizze = pizze.map(toUpper);
                        </script>

                        <?php
                        $i=0; /* CONTATORE */
                        while($i<$n){
                            echo "<tr>";
                                echo "<td id='pizze'>$pizze[$i]</td>";
                                echo "<td id='prezzo'>&euro;$prz1[$i]</td>";
                                echo "<td id='bottoni1'><button class='add but1' onclick='add(1,n[$i])'>+</button> <button class='remove rem1' onclick='remove(1,n[$i])'>-</button> </td>";
                            echo "</tr>";
                            $i++;
                        }
                        echo "</table>";

                    
                    /* BIBITE */
                    $bibite = array();
                    $prz2 = array();
					//query da eseguire
					$query = "SELECT nome,prezzo FROM bibite";
					//eseguo la query   
					$ris = mysqli_query($dbconn,$query);
                    //scandisco i risultati                       
					while($riga = mysqli_fetch_array($ris))  {
						$nome = $riga['nome'];  
						$prz = $riga['prezzo'];    
                        array_push($bibite,$nome);/* Inserisco nell'array pizza il nome della pizza*/
                        array_push($prz2,$prz);/* Inserisco nell'array prezzi il prezzo corrispondente */
                    }

                        echo "<table id='table2'>";
                            echo "<tr>";
                                echo "<th>BEVANDA</th>";
                                echo "<th>PREZZO</th>";
                                echo "<th></th>";
                            echo "</tr>";
                        $n = sizeof($bibite); /* numero pizze */
                    ?>
                        <script>
                            /* DEFINISCO VARIABILI */
                            var numBibite = <?php echo json_encode($n); ?>;/* LUNGHEZZA ARRAY PIZZE */
                            var n = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
                            var bibite = <?php echo json_encode($bibite); ?>;
                            var prz2 = <?php echo json_encode($prz2); ?>;
                            /* TRASFORMO IN MAIUSCOLO TUTTO */
                            toUpper = function(x){ return x.toUpperCase();   };
                            bibite = bibite.map(toUpper);
                        </script>

                        <?php
                        $i=0; /* CONTATORE */
                        while($i<$n){
                            echo "<tr>";
                                echo "<td id='bibite'>$bibite[$i]</td>";
                                echo "<td id='prezzo'>&euro;$prz2[$i]</td>";
                                echo "<td id='bottoni2'><button class='add but2' onclick='add(2,n[$i])'>+</button> <button class='remove rem2' onclick='remove(2,n[$i])'>-</button> </td>";
                            echo "</tr>";
                            $i++;
                        }
                        echo "</table>";


                        /* DOLCI */
                    $dolci = array();
                    $prz3 = array();
					//query da eseguire
					$query = "SELECT nome,prezzo FROM dolci";
					//eseguo la query   
					$ris = mysqli_query($dbconn,$query);
                    //scandisco i risultati                       
					while($riga = mysqli_fetch_array($ris))  {
						$nome = $riga['nome'];  
						$prz = $riga['prezzo'];    
                        array_push($dolci,$nome);/* Inserisco nell'array pizza il nome della pizza*/
                        array_push($prz3,$prz);/* Inserisco nell'array prezzi il prezzo corrispondente */
                    }

                        echo "<table id='table3'>";
                            echo "<tr>";
                                echo "<th>DOLCE</th>";
                                echo "<th>PREZZO</th>";
                                echo "<th></th>";
                            echo "</tr>";
                        $n = sizeof($dolci); /* numero pizze */
                    ?>
                        <script>
                            /* DEFINISCO VARIABILI */
                            var numDolci = <?php echo json_encode($n); ?>;/* LUNGHEZZA ARRAY PIZZE */
                            var n = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
                            var dolci = <?php echo json_encode($dolci); ?>;
                            var prz3  = <?php echo json_encode($prz3); ?>;
                            /* TRASFORMO IN MAIUSCOLO TUTTO */
                            toUpper = function(x){ return x.toUpperCase();   };
                            dolci = dolci.map(toUpper);
                        </script>

                        <?php
                        $i=0; /* CONTATORE */
                        while($i<$n){
                            echo "<tr>";
                                echo "<td id='bibite'>$dolci[$i]</td>";
                                echo "<td id='prezzo'>&euro;$prz3[$i]</td>";
echo "<td id='bottoni3'><button class='add but3' onclick='add(3,n[$i])'>+</button> <button class='remove rem3' onclick='remove(3,n[$i])'>-</button> </td>";
                            echo "</tr>";
                            $i++;
                        }
                        echo "</table>";

                        echo "<div style='clear:both'></div>";
                        include "dbclose.php";
                    ?>

                </div>
                <script>
                    function add(s,t){
                        switch(s){
                            case 1: 
                                document.getElementById("ord1").innerHTML += pizze[t] + ",\n"; /* STAMPO PIZZA */
                               	var n = parseFloat(document.getElementById("prezzoTot").innerHTML); /*PREZZO PRECEDENTE*/
                                var prezzo = parseFloat(prz1[t]);
                                n += prezzo;  /* PREZZO NUOVO */
                                document.getElementById("prezzoTot").innerHTML = n+"€";
                                break;
                            case 2: 
                                document.getElementById("ord2").innerHTML += bibite[t] + ",\n"; /* STAMPO BIBITA */
                               	var n = parseFloat(document.getElementById("prezzoTot").innerHTML); /*PREZZO PRECEDENTE*/
                                var prezzo = parseFloat(prz2[t]);
                                n += prezzo;  /* PREZZO NUOVO */
                                document.getElementById("prezzoTot").innerHTML = n+"€";
                                break;
                            case 3: 
                                document.getElementById("ord3").innerHTML += dolci[t] + ",\n"; /* STAMPO DOLCE */
                               	var n = parseFloat(document.getElementById("prezzoTot").innerHTML); /*PREZZO PRECEDENTE*/
                                var prezzo = parseFloat(prz3[t]);
                                n += prezzo;  /* PREZZO NUOVO */
                                document.getElementById("prezzoTot").innerHTML = n+"€";
                                break;
                        }
                    }
                </script>
                <div style='clear:both'></div>
                <form method="POST" action="#">
                    <textarea readonly=readonly id="ord1" class="first" name="pizze" placeholder="PIZZE" required></textarea>
                    <textarea readonly=readonly id="ord2" name="bibite" placeholder="BIBITE" required></textarea> 
                    <textarea readonly=readonly id="ord3" name="dolci" placeholder="DOLCI" required></textarea>
                    <textarea readonly=readonly id="prezzoTot" class='conto' name="prezzo" placeholder="PREZZO">0€</textarea>
                    <input type="hidden" value="<?php echo $t; ?>" name="t"/>
                    <input type="submit" onclick="ordina()" name="submit" value="ORDINA!"/>
                </form>
            <?php
                }/* FINE IF e INIZIO ELSE,   SE NON HAI I DATI FAI LOGIN*/
                    else{ header("Location: check.php");}   
                }else{ /* SE HAI GIà COMPILATO IL FORMA ALLORA AGGIORNO IL DATABASE */
                    ?>
                    <script> window.alert("ORDINATO CORRETTAMENTE"); </script>
                <?php
                        $pizze = $_POST['pizze'];
                        $bibite = $_POST['bibite'];
                        $dolci = $_POST['dolci'];
                        $t = $_POST['t'];
                        
                        include "dbopen.php";
                        //query da eseguire
                        $query = "INSERT INTO ordinazioni (pizze,bibite,dolci,codtav) VALUES ('$pizze','$bibite','$dolci','$t');";
                        //eseguo la query
                        $ris = mysqli_query($dbconn,$query);
                        include "dbclose.php";
                        echo "<h2 class='wait' style='font-size:20pt;width:100%;text-align: center;'>ORDINE RICEVUTO CORRETTAMENTE!</h2>";
                        
                  }
              ?>
              <script>
              
              	function remove(s,t){
                	switch(s){
                    	case 1:
                        	var str = document.getElementById("ord1").innerHTML; /* PRENDO IL CONTENUTO */
                            var ris = str.replace("\n"+pizze[t]+",", " ");  /* CERCO LA PIZZA CORRISPONDENTE E LA RIMPIAZZO */
                            document.getElementById("ord1").innerHTML = ris; /* AGGIORNO IL RISULTATO */
                            /* AGGIORNO IL PREZZO */
                            var n = parseFloat(document.getElementById("prezzoTot").innerHTML); /*PREZZO PRECEDENTE*/
                            var prezzo = parseFloat(prz1[t]);
                            n -= prezzo;  /* PREZZO NUOVO */
                            document.getElementById("prezzoTot").innerHTML = n+"€";
                        	break;
                    	case 2:
                        	var str = document.getElementById("ord2").innerHTML; /* PRENDO IL CONTENUTO */
                            var ris = str.replace("\n"+bibite[t]+",", " ");  /* CERCO LA PIZZA CORRISPONDENTE E LA RIMPIAZZO */
                            document.getElementById("ord2").innerHTML = ris; /* AGGIORNO IL RISULTATO */
                            /* AGGIORNO IL PREZZO */
                            var n = parseFloat(document.getElementById("prezzoTot").innerHTML); /*PREZZO PRECEDENTE*/
                            var prezzo = parseFloat(prz2[t]);
                            n -= prezzo;  /* PREZZO NUOVO */
                            document.getElementById("prezzoTot").innerHTML = n+"€";
                        	break;
                       case 3:
                        	var str = document.getElementById("ord3").innerHTML; /* PRENDO IL CONTENUTO */
                            var ris = str.replace("\n"+dolci[t]+",", " ");  /* CERCO LA PIZZA CORRISPONDENTE E LA RIMPIAZZO */
                            document.getElementById("ord3").innerHTML = ris; /* AGGIORNO IL RISULTATO */
                            /* AGGIORNO IL PREZZO */
                            var n = parseFloat(document.getElementById("prezzoTot").innerHTML); /*PREZZO PRECEDENTE*/
                            var prezzo = parseFloat(prz3[t]);
                            n -= prezzo;  /* PREZZO NUOVO */
                            document.getElementById("prezzoTot").innerHTML = n+"€";
                        	break;
                    }/* RIM */
                }
              
              </script>
    </body>
</html>
