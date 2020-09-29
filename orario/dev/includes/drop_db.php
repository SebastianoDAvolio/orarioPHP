<?php
	session_start();
	include_once './dbh.inc.php';
	$sql = "SELECT * FROM `materie_orario_scuola_tokens` WHERE `Token` = '" .$_SESSION['token'] ."' AND `IP` = '" .$_SERVER['REMOTE_ADDR'] ."'";
   	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    if($row["Token"]=="")
	{
    	header("Location: ../index.php");
	}else{
    	$sql="TRUNCATE materie_orario_scuola";
        $result = mysqli_query($conn, $sql);
        header("Location: ../user.php");
    }
?>