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
        <title>ORARIO 4^C INF - AREA RISERVATA</title>
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
            <a class="navbar-brand" href="#"><img src="./favicon.png" width="30px;"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="./includes/signout.php">Logout<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./includes/drop_db.php">Elimina Orario<span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
          <div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Lunedì</th>
                    <th scope="col">Martedì</th>
                    <th scope="col">Mercoledì</th>
                    <th scope="col">Giovedì</th>
                    <th scope="col">Venerdì</th>
                    <th scope="col">Sabato</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <?php
						$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
                        for($i=0;$i<6;$i++){
                            $sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=1;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<td>";
                            echo "<p>";
                            echo $row['Materia'];
                            echo "<br/>";
                            echo $row['Prof'];
                            echo "<br/>";
                            echo $row['Classe'];
                            echo "<br/>";
                            echo '<a href="./edit.php?day='.$days[$i] .'&h=1">Modifica</a>';
                            echo "</td>";
                         }
              		?>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                  <?php
						$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
                        for($i=0;$i<6;$i++){
                            $sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=2;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<td>";
                            echo "<p>";
                            echo $row['Materia'];
                            echo "<br/>";
                            echo $row['Prof'];
                            echo "<br/>";
                            echo $row['Classe'];
                            echo "<br/>";
                            echo '<a href="./edit.php?day='.$days[$i] .'&h=2">Modifica</a>';
                            echo "</td>";
                         }
              		?>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                   <?php
						$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
                        for($i=0;$i<6;$i++){
                            $sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=3;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<td>";
                            echo "<p>";
                            echo $row['Materia'];
                            echo "<br/>";
                            echo $row['Prof'];
                            echo "<br/>";
                            echo $row['Classe'];
                            echo "<br/>";
                            echo '<a href="./edit.php?day='.$days[$i] .'&h=3">Modifica</a>';
                            echo "</td>";
                         }
              		?>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <?php
						$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
                        for($i=0;$i<6;$i++){
                            $sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=4;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<td>";
                            echo "<p>";
                            echo $row['Materia'];
                            echo "<br/>";
                            echo $row['Prof'];
                            echo "<br/>";
                            echo $row['Classe'];
                            echo "<br/>";
                            echo '<a href="./edit.php?day='.$days[$i] .'&h=4">Modifica</a>';
                            echo "</td>";
                         }
              		?>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <?php
						$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
                        for($i=0;$i<6;$i++){
                            $sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=5;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<td>";
                            echo "<p>";
                            echo $row['Materia'];
                            echo "<br/>";
                            echo $row['Prof'];
                            echo "<br/>";
                            echo $row['Classe'];
                            echo "<br/>";
                            echo '<a href="./edit.php?day='.$days[$i] .'&h=5">Modifica</a>';
                            echo "</td>";
                         }
              		?>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <?php
						$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
                        for($i=0;$i<6;$i++){
                            $sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=6;";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<td>";
                            echo "<p>";
                            echo $row['Materia'];
                            echo "<br/>";
                            echo $row['Prof'];
                            echo "<br/>";
                            echo $row['Classe'];
                            echo "<br/>";
                            echo '<a href="./edit.php?day='.$days[$i] .'&h=6">Modifica</a>';
                            echo "</td>";
                         }
              		?>
                  </tr>
                  <tr>
                  	<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
          </div>
    </body>
</html>