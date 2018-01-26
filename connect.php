<?php
			$DB_host = 'localhost';
			$DB_baza = 'uciliste_db';
			$DB_user = 'ucilisteAdmin';
			$DB_lozinka = 'Password01';
			
			
function otvoriBP() {
			global $DB_host;
			global $DB_baza;
			global $DB_user;
			global $DB_lozinka;
			global $conn;
					
			//Spajanje na bazu podataka
				$conn = mysqli_connect($DB_host, $DB_user, $DB_lozinka, $DB_baza);
				if(! $conn) {
					die('Pogreška pri spajanju sa serverom! ' . mysqli_error());
					exit();
				}
			//CHARSET
				mysqli_set_charset($conn, "utf8");
				$set = mysqli_select_db($conn,$DB_baza);
				if(! $set) {
					die('Pogreška! ' . mysqli_error());
					exit();
				}
				mysqli_query($conn, "set names 'utf8'");
				//Spajanje na tablicu
				$db_selected = mysqli_select_db($conn, $DB_baza);
				if(! $db_selected) {
				die('Pogreška na spajanju sa serverom i bazom! ' . mysqli_error());
				exit();
	}
	}
	
function izvrsiBP($sql) {
			global $DB_host;
			global $DB_baza;
			global $DB_user;
			global $DB_lozinka;
			global $conn;
					
			//Spajanje na bazu podataka
				$conn = mysqli_connect($DB_host, $DB_user, $DB_lozinka, $DB_baza);
	$rs = mysqli_query($conn, $sql);
	if(! $rs) {
		pogreska('Pogreška! ' . mysqli_error($conn));
		exit();
	}
	return $rs;
}
function pogreska($error) {
	echo $error;
}
otvoriBP();
	?>
