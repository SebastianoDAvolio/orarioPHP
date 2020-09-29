<?php
	include_once 'includes/dbh.inc.php';
	session_start();
	$sql = "SELECT * FROM `materie_orario_scuola_tokens` WHERE `Token` = '" .$_SESSION['token'] ."' AND `IP` = '" .$_SERVER['REMOTE_ADDR'] ."'";
   	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    if($row["Token"]=="")
	{
    	header("Location: ./index.php");
	}else{
    	if(isset($_POST['log'])){
        	if($_POST['log']=="log"){
            	$_SESSION['token']="";
                header("Location: ./index.php");
            }
        }
    }
?>
<html>
	<head>
    	<meta charset="UTF-8">
    </head>
	<body>
    <center>
          <form action="./includes/signup.inc.php" method="POST">
              <label for="GIORNO">GIORNO</label>
                <select name="GIORNO" id="GIORNO" required>
                  <option value="LUNEDI">LUNEDI</option>
                  <option value="MARTEDI">MARTEDI</option>
                  <option value="MERCOLEDI">MERCOLEDI</option>
                  <option value="GIOVEDI">GIOVEDI</option>
                  <option value="VENERDI">VENERDI</option>
                  <option value="SABATO">SABATO</option>
                </select>
                <br/>
                <br/>
                <label for="PROFESSORE">PROFESSORE</label>
                <input type="text" required name="PROFESSORE" id="PROFESSORE">
                <br/>
                <br/>
                <label for="MATERIA">MATERIA</label>
                <select name="MATERIA" id="MATERIA" required>
                  <option value="LINGUA E LETTERATURA ITALIANA">LINGUA E LETTERATURA ITALIANA</option>
                  <option value="INFORMATICA">INFORMATICA</option>
                  <option value="STORIA">STORIA</option>
                  <option value="T.P.S.I.T">T.P.S.I.T</option>
                  <option value="TELECOMUNICAZIONI">TELECOMUNICAZIONI</option>
                  <option value="RELIGIONE">RELIGIONE</option>
                  <option value="LINGUA INGLESE">LINGUA INGLESE</option>
                  <option value="SCIENZE MOTORIE E SPORTIVE">SCIENZE MOTORIE E SPORTIVE</option>
                  <option value="MATEMATICA E COMPLEMENTI">MATEMATICA E COMPLEMENTI</option>
                  <option value="SISTEMI E RETI">SISTEMI E RETI</option>
                </select>
                <br/>
                <br/>
                <label for="CLASSE">CLASSE</label>
                <input type="text" required name="CLASSE" id="CLASSE">
                <br/>
                <br/>
                <label for="ORA">ORA</label>
                <select name="ORA" id="ORA" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
                <br/>
                <br/>
                <button name="btn" value="carica" type="submit">Carica</button>
          </form>
          <br/>
          <br/>
          <form action="./includes/drop_db.php" method="POST">
              <button>CANCELLA ORARIO</button>
          </form>
          <form action="./user.php" method="POST">
              <button name="log" value="log">LOGOUT</button>
          </form>
        <center>
    </body>
</html>