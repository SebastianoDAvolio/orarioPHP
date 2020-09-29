<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword ="root";
$dbName = "db1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

function printOut($h){
		$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");	
        for($i=0;$i<6;$i++){
           	$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='" .$days[$i] ."' AND Ora=" .$h .";";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td>";
            echo "<p>";
            echo $row['Materia'];
            echo "<br/>";
           	echo $row['Prof'];
           	echo "<br/>";
            echo $row['Classe'];
            echo "</td>";
         }
}