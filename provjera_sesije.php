<?php

if($aktivni_korisnik_tip !=0 && $aktivni_korisnik_tip!=1){
		session_start();
		unset($_SESSION["aktivni_korisnik"]);
		unset($_SESSION["aktivni_korisnik_tip"]);
		session_destroy();
		header("Location:loginscreen.php");
	}
	
	?>