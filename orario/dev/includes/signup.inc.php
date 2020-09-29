<?php
		include_once 'dbh.inc.php';
    	$mat = mysqli_real_escape_string($conn, $_POST['MATERIA']);
        $day = mysqli_real_escape_string($conn, $_POST['GIORNO']);
        $hrs = $_POST['ORA'];
        $prof = mysqli_real_escape_string($conn, $_POST['PROFESSORE']);
        $class_ = mysqli_real_escape_string($conn, $_POST['CLASSE']);
        $sql="DELETE FROM `my_sebastianodavolio`.`materie_orario_scuola` WHERE `materie_orario_scuola`.`Giorno` = '" .$_POST['GIORNO']  ."' AND `Ora` = '" .$_POST['ORA'] ."';";
   		$result = mysqli_query($conn, $sql);
		$sql= "INSERT INTO `materie_orario_scuola`(`Materia`, `Giorno`, `Ora`, `Prof`, `Classe`) VALUES ('$mat','$day',$hrs,'$prof','$class_');";
        $result = mysqli_query($conn, $sql);
        header("Location: ../user.php");