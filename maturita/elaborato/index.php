<html>
	<head>
		<title>MENU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	    <link rel="icon" type="image/png" href="../icon/iconMenu.png"/>
	</head>
	<body>
		<div class="top">
			<a id="prenota" href="prenota.php">PRENOTA</a>  
            <a id="pdf" target="_blank" href="../pdf/descrizione.pdf"><img id="imgPdf" src="../img/pdf.png"/></a>  
			<span>PIZZERIA</span>
		</div>
	
			<div class="menu">
				<h3>MENU</h3>
				<span></span>
				<div style="clear:both"></div>
				
				<div class="submenu left">
                <?php
					//apertura db    
					include "dbopen.php";
					//VISUALIZZO pizze
					//query da eseguire
					$query = "SELECT * FROM pizze WHERE id<6";
					//eseguo la query   
					$ris = mysqli_query($dbconn,$query);
					//scandisco i risultati    
					while($riga = mysqli_fetch_array($ris))  {    
						$idp = $riga['id'];
						$nome = $riga['nome'];    
						$ing = $riga['ingredienti'];    
						$prz = $riga['prezzo'];    
						
                        echo "<h4>$nome</h4><h5>$prz €</h5>";
                        echo "<span class='pizze'>$ing</span>";
                        echo "<div style='clear:both;'></div>";
					}
					
					?>
				</div>

				<div class="submenu right">
                    <?php 
                    	//VISUALIZZO pizze
                        //query da eseguire
                        $query = "SELECT * FROM pizze WHERE id>6";
                        //eseguo la query   
                        $ris = mysqli_query($dbconn,$query);
                        //scandisco i risultati    
                        while($riga = mysqli_fetch_array($ris))  {    
                            $idp = $riga['id'];
                            $nome = $riga['nome'];    
                            $ing = $riga['ingredienti'];    
                            $prz = $riga['prezzo'];    

                            echo "<h4>$nome</h4><h5>$prz €</h5>";
                            echo "<span class='pizze'>$ing</span>";
                            echo "<div style='clear:both;'></div>";
                        }
                    	
                    ?>
				</div>
                
			<!-- BIBITE -->	
            
                <h3>BIBITE</h3>
				<span></span>
				<div style="clear:both"></div>
				
				<div class="submenu left">
                <?php
					//VISUALIZZO pizze
					//query da eseguire
					$query = "SELECT * FROM bibite WHERE id<4";
					//eseguo la query   
					$ris = mysqli_query($dbconn,$query);
					//scandisco i risultati    
					while($riga = mysqli_fetch_array($ris))  {    
						$idp = $riga['id'];
						$nome = $riga['nome'];      
						$prz = $riga['prezzo'];    
						
                        echo "<h4>$nome</h4><h5>$prz €</h5>";
                        echo "<span class='spazio pizze'>.</span>";
                        echo "<div style='clear:both;'></div>";
					}
					
					?>
				</div>
                
                <div class="submenu right">
                    <?php 
                    	//VISUALIZZO pizze
                        //query da eseguire
                        $query = "SELECT * FROM bibite WHERE id>3";
                        //eseguo la query   
                        $ris = mysqli_query($dbconn,$query);
                        //scandisco i risultati    
                        while($riga = mysqli_fetch_array($ris))  {    
                            $idp = $riga['id'];
                            $nome = $riga['nome'];  
                            $prz = $riga['prezzo'];    

                            echo "<h4>$nome</h4><h5>$prz €</h5>";
                            echo "<span class='spazio pizze'>.</span>";
                            echo "<div style='clear:both;'></div>";
                        }
                    ?>
				</div>
                
                <!-- DOLCI -->	
            
                <h3>DOLCI</h3>
				<span></span>
				<div style="clear:both"></div>
				
				<div class="submenu left dolci">
                <?php
					//VISUALIZZO dolci
					//query da eseguire
					$query = "SELECT * FROM dolci";
					//eseguo la query   
					$ris = mysqli_query($dbconn,$query);
					//scandisco i risultati    
					while($riga = mysqli_fetch_array($ris))  {    
						$idp = $riga['id'];
						$nome = $riga['nome'];      
						$prz = $riga['prezzo'];    
						
                        echo "<h4>$nome</h4><h5>$prz €</h5>";
                        echo "<span class='spazio pizze'>.</span>";
                        echo "<div style='clear:both;'></div>";
					}
					include "dbclose.php";
					?>
				</div><!-- submenu LEFT -->
                
         
                
              
			</div><!-- MENU -->
	</body>
</html>