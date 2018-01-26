<?php
include("connect.php");


//Upis u bazu
$ime = $_POST['name'];
$prezime = $_POST['surname'];
$mail = $_POST['email'];
$adresa = $_POST['adress'];
$datum_rodenja = $_POST['date_birth'];
$datum_pocetka = $_POST['date_signup'];
$datum_kraja = $_POST['date_end'];
$vrste_skole = "";
if(isset($_POST['type_of_course'])){$vrste_skole = $_POST['type_of_course'];}
$status = "";
if(isset($_POST['status'])){$status = $_POST['status'];}
$username = $_POST['username'];
$lozinka = $_POST['password'];


$sql = "INSERT INTO clanovi (name, surname, email, adress, date_birth, date_signup, date_end, type_of_course, status, username, password) VALUES ('$ime', '$prezime', '$mail', '$adresa',
 '$datum_rodenja', '$datum_pocetka', '$datum_kraja', '$vrste_skole', '$status', '$username', '$lozinka')";

if(!mysqli_query($conn, $sql)){
die('Greska pri upisu u bazu' . mysqli_error());
}

echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Korisnik je uspjesno upisan u bazu!');
	window.location.href='http://localhost/uciliste/clanovi.php';
    </SCRIPT>");
	
mysqli_close($sql);
?>

