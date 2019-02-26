<?php

$result1="correcto";
$result2="error";

if(!empty($_POST)){
	if(isset($_POST["val1"]) &&isset($_POST["val2"])){
		if($_POST["val1"]!=""&&$_POST["val2"]!=""){
			include "config.php";
			
			$user_id=null;
			$sql1= "select * from tabla_admin where (usuario=\"$_POST[val1]\" or correo=\"$_POST[val1]\") and contrasena=\"$_POST[val2]\" ";
			$query = $mysqli->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_admin"];
				break;
			}
			if($user_id==null){
				echo $result2;
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				echo $result1;
			}
		}
	}
}



?>