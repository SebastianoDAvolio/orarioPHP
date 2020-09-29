<?php
	session_start();
	include_once './includes/dbh.inc.php';
	$sql = "SELECT * FROM `materie_orario_scuola_tokens` WHERE `Token` = '" .$_SESSION['token'] ."' AND `IP` = '" .$_SERVER['REMOTE_ADDR'] ."'";
   	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    if($row["Token"]=="")
	{
    	header("Location: ./index.php");
	}
?>
<html>
    <head>
        <title>ORARIO 4^C INF</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <style>
            td{
                text-align: center;
            }
            th{
                text-align: center;
            }
            spacing-custom{
            	margin-bottom:10px;
            }
        </style>
        <link rel="icon" href="./favicon.png" />
    </head>
    <body class=".bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand"><img src="./favicon.png" width="30px;"/></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <h4>Modifica di: <?php echo $_GET['day']; echo " "; echo $_GET['h']; echo" ^ Ora"; ?>
                  </h4>
                </li>
              </ul>
            </div>
          </nav>
          <br/>
          <br/>
          <div width="80%">
          	<form width="80%" action="./includes/signup.inc.php" method="POST">
        	  <input type="hidden" name="ORA" id="ORA" value=<?php echo'"'; echo $_GET['h']; echo '">';?>
              <input type="hidden" name="GIORNO" id="GIORNO" value=<?php echo'"'; echo $_GET['day']; echo '"'; ?>
              <div class="form-group">
                <label for="PROFESSORE">Professore:</label>
                <input type="text" class="form-control" name="PROFESSORE" id="PROFESSORE" placeholder="">
              </div>
              <div class="form-group">
                <label for="MATERIA">Materia:</label>
                <select class="form-control" id="MATERIA" name="MATERIA">
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
              </div>
              <div class="form-group">
                <label for="CLASSE">Classe:</label>
                <input type="text" class="form-control" name="CLASSE" id="CLASSE" placeholder="">
              </div>
              <button type="submit" class="btn btn-info">OK</button>
            </form>
          </div>
         </body>