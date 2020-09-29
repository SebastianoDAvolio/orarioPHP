<?php
	session_start (); 
	include_once 'includes/dbh.inc.php';
    if(isset ($_POST['mail']) && isset ($_POST['pwd'])){
    	$email=mysqli_real_escape_string($conn, $_POST['mail']);
        $pw=mysqli_real_escape_string($conn, $_POST['pwd']);
    	$sql ="SELECT * FROM users WHERE email='$email';";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
        $ver= password_verify($pw,$row['hash']);
        if($ver==1){
        	$cookie_name = "dtt";
          	$cookie_value = "true";
            setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
            $str="";
            $chars="qwertyiopasdfghjklzxcvbnm_-1234567890.QWERTYUIOPASDFGHJKLZXCVBNM()";
            $i=0;
            do{
                $randI=array_rand($char_Array);
                $str= substr(str_shuffle($chars), 0, 15);
                $i++;
            }while($i<7);
            $sql = "INSERT INTO `my_sebastianodavolio`.`materie_orario_scuola_tokens` (`ID`, `Token`, `IP`) VALUES (NULL, '".$str ."', '" .$_SERVER['REMOTE_ADDR'] ."');";
            $res=mysqli_query($conn,$sql);
    		$_SESSION['token'] = $str;
        	header("Location: ./user.php");
        }else{
        	echo'<script>alert("Dati errati");</script>';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <link rel="icon" href="./favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    	function loginpage(){
        	console.log("Rendering Login Form");
            let flag = document.getElementById("login-flag");
            let form = document.getElementById("login-panel");
            Hide(flag);
            Show(form);
        }
        function Show(sender){
        	sender.setAttribute("style","display:block;")
        }
        function Hide(sender){
        	sender.setAttribute("style","visibility:hidden;");
        }
    </script>
	<title>ORARIO 4^C INF</title>
</head>
<body>
	<table id="tabella" width="100%">
      <tr>
		<th width="2%">&nbsp;</th>
      	<th width="15.5%">Luned&igrave;</th>
        <th width="15.5%">Marted&igrave;</th>
        <th width="15.5%">Mercoled&igrave;</th>
        <th width="15.5%">Gioved&igrave;</th>
        <th width="15.5%">Venerd&igrave;</th>
        <th width="15.5%">Sabato</th>
       </tr>
	   <tr class="one">
	   <td width="2%">1</td>
        <?php
			$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");
			
			for($i=0;$i<6;$i++){
				$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='$days[$i]' AND Ora=1;";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo "<td>";
				echo "<p>";
				echo $row['Materia'];
				echo "<br/>";
				echo $row['Prof'];
				echo "<br/>";
				echo $row['Classe'];
				echo "</p>";
				echo "</td>";
			}
              ?>
		</tr>
		<tr class="two">
	   <td width="2%">2</td>
        <?php
			$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");
			
			for($i=0;$i<6;$i++){
				$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='$days[$i]' AND Ora=2;";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo "<td>";
				echo "<p>";
				echo $row['Materia'];
				echo "<br/>";
				echo $row['Prof'];
				echo "<br/>";
				echo $row['Classe'];
				echo "</p>";
				echo "</td>";
			}
              ?>
		</tr>
		<tr class="one">
	   <td width="2%">3</td>
        <?php
			$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");
			
			for($i=0;$i<6;$i++){
				$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='$days[$i]' AND Ora=3;";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo "<td>";
				echo "<p>";
				echo $row['Materia'];
				echo "<br/>";
				echo $row['Prof'];
				echo "<br/>";
				echo $row['Classe'];
				echo "</p>";
				echo "</td>";
			}
              ?>
		</tr>
		<tr class="two">
	   <td width="2%">4</td>
        <?php
			$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");
			
			for($i=0;$i<6;$i++){
				$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='$days[$i]' AND Ora=4;";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo "<td>";
				echo "<p>";
				echo $row['Materia'];
				echo "<br/>";
				echo $row['Prof'];
				echo "<br/>";
				echo $row['Classe'];
				echo "</p>";
				echo "</td>";
			}
              ?>
		</tr>
		<tr class="one">
	   <td width="2%">5</td>
        <?php
			$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");
			
			for($i=0;$i<6;$i++){
				$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='$days[$i]' AND Ora=5;";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo "<td>";
				echo "<p>";
				echo $row['Materia'];
				echo "<br/>";
				echo $row['Prof'];
				echo "<br/>";
				echo $row['Classe'];
				echo "</p>";
				echo "</td>";
			}
              ?>
		</tr>
		<tr class="two">
	   <td width="2%">6</td>
        <?php
			$days = array("LUNEDI","MARTEDI","MERCOLEDI","GIOVEDI","VENERDI","SABATO");
			
			for($i=0;$i<6;$i++){
				$sql ="SELECT * FROM materie_orario_scuola WHERE giorno='$days[$i]' AND Ora=6;";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo "<td>";
				echo "<p>";
				echo $row['Materia'];
				echo "<br/>";
				echo $row['Prof'];
				echo "<br/>";
				echo $row['Classe'];
				echo "</p>";
				echo "</td>";
			}
              ?>
		</tr>
    </table>
    <center>
    	<h4>Advertisment</h4>
        <script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=728X90/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>
        <br/>
        <br/>
        <a onclick="loginpage()" id="login-flag" style="color:blue;cursor:pointer;">LOGIN</a>
        <br/>
        <br/>
        <form action="https://sebastianodavolio.altervista.org/orario/index.php" method="POST" id="login-panel" style="visibility:hidden;">
        	<p style="display:inline;">
            	<label>Username</label><input type="email" required name="mail">
            </p>
            <br/>
            <br/>
            <p style="display:inline;">
            	<label>Password&nbsp;&nbsp;</label><input type="password" required name="pwd">
            </p>
            <br/>
            <br/>
            <p style="display:inline;">
            	<button type="submit">OK</button>
            </p>
        </form>
    </center>
</body>