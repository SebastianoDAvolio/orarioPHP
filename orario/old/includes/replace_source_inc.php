<?php
		include_once 'dbh.inc.php';
    	$mat = mysqli_real_escape_string($conn, $_POST['mat']);
        $day = mysqli_real_escape_string($conn, $_POST['day']);
        $hrs = $_POST['hrs'];
        $prof = mysqli_real_escape_string($conn, $_POST['prof']);
        $mat_chg = mysqli_real_escape_string($conn, $_POST['mat_chg']);
		$sql= "INSERT INTO `materie_orario_scuola`(`Materia`, `Giorno`, `Ora`, `Prof`, `Classe`) VALUES ('$mat','$day',$hrs,'$prof','$class_');";
        $result = mysqli_query($conn, $sql);
		
        header("Location: ../add_time.php");