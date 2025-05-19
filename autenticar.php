<?php
session_start();
$fes = date("Y-m-d");
include 'db.php';
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"]; 		
$inred=$_POST["inred"]; 
if($inred=='/')$inred='';

	 $sqls=$conn->query ("SELECT * FROM login WHERE (user='$usuario' or email='$usuario') AND pass ='$contrasena' ") or die(mysqli_error());   
     if($row_cnt = $sqls->num_rows>0) {       
          while ($rows = $sqls->fetch_array(MYSQLI_ASSOC) ) { 
		   
			$_SESSION['id'] = $rows["id"];			
			$_SESSION['rol'] = $rows['rol'];			
			$_SESSION['user'] = $rows['user'];	
			$_SESSION['nombre'] = $rows['nombre'];				
			$_SESSION['status'] = $rows['status'];	
				
			$status=$rows['status'];
			$user=$rows['user'];	
			
			$_SESSION['red']=$rows['red'];
			

			

		if($_SESSION['rol']=='1') {
			header ("Location: principal.php");	
		} 



	echo "<script type='text/javascript'>
  			alert('Usuario o contraseña incorrecta');
  			window.location.href = './$inred';
			</script>"; 
			
		
	 }

	}else{ 

		   echo "<script type='text/javascript'>
  			alert('Usuario o contraseña incorrecta');
  			window.location.href = './$inred';
			</script>";  
			}	
	
?>