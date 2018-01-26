<?php
include("connect.php");
//Izmjena u bazi
$greska = "";
$status = "";
if(isset($_POST['status'])){$status = $_POST['status'];}
$username = "";
if(isset($_POST['username'])){$username = $_POST['username'];}


if (isset($_POST['username'])) {
	$upit="SELECT * FROM clanovi WHERE username='$username'";
	$check=mysql_query($upit);
	if(mysql_num_rows($check)>0) {
				$sql = "UPDATE clanovi SET status = '$status' WHERE username = '$username'" ;
						if(!mysql_query($sql)){
							die('Greska pri upisu u bazu' . mysql_error());
							}
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Korisnikov status je izmjenjen!');
						window.location.href='http://localhost/uciliste/admin.php';
						</SCRIPT>");
				}
				else{
				$greska= "Upisali ste krivo korisničko ime ili lozinku!";
				}
}
?>

