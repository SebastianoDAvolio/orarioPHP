<?php
		include_once 'dbh.inc.php';
    	$mat = mysqli_real_escape_string($conn, $_POST['MATERIA']);
        $day = mysqli_real_escape_string($conn, $_POST['GIORNO']);
        $hrs = $_POST['ORA'];
        $prof = mysqli_real_escape_string($conn, $_POST['PROFESSORE']);
        $class_ = mysqli_real_escape_string($conn, $_POST['CLASSE']);
		$sql= "INSERT INTO `materie_orario_scuola`(`Materia`, `Giorno`, `Ora`, `Prof`, `Classe`) VALUES ('$mat','$day',$hrs,'$prof','$class_');";
        $result = mysqli_query($conn, $sql);
		
        header("Location: ../user.php");