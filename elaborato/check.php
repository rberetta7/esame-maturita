<?php
	if(!isset($_GET['t']) && !isset($_GET['p'])){
?>
<html>
	<head>
		<title>ORDINAZIONE</title>
		<link href="login.css" rel="stylesheet" type="text/css"/>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
	    <link rel="icon" type="image/png" href="../icon/login.png"/>
	</head>
	<body>
		<form action="check.php" method="GET">
			<h1>PRENOTAZIONE</h1>
				<div class="insert" id="top"><i class='far fa-user-circle' style='font-size:25px'></i><input type="text" id="first" name="t" placeholder="NUM TAVOLO" required /></div>
				<div class="insert"><i class='fas fa-key' style='font-size:25px'></i><input type="password" name="p" placeholder="PASSWORD" required /></div><br>
				<input type="submit"  value="LOGIN">
        </form>
		<script>
			document.getElementById("first").focus();
		</script>
	</body>
</html>

<?php
	}else{
		$t = $_GET['t'];
		$p = md5($_GET['p']);

		include "dbopen.php";

		//query da eseguire
		$query = "SELECT * FROM login WHERE tavolo='$t' AND password='$p'";
		//eseguo la query
		$ris = mysqli_query($dbconn,$query);
		//scandisco i risultati
		//se l'utente esiste ho 1 riga altrimenti 0
		$nr = mysqli_num_rows($ris);
		if($nr>0){
			header("Location: prenota.php?t=$t&p=$p");
		}else{
			header("Location: check.php");
		}
		include "dbclose.php";
	}
		
?>

