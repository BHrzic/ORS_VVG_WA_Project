<?php
include("header.php");
include("connect.php");	

if(isset($_GET['logout'] )) {
		unset($_SESSION["aktivni_korisnik"]);
		unset($_SESSION["aktivni_korisnik_tip"]);
		unset($_SESSION["aktivni_korisnik_ime"]);
		session_destroy();
		header("Location:index.php");
		exit();
	}
	
	$pogreska = "";
	if (isset($_POST['username'])) {
		$bp = otvoriBP();
		
		$username=mysqli_real_escape_string($conn, $_POST['username']);
		$password =mysqli_real_escape_string($conn,$_POST['password']);

		if (!empty($username) && !empty($password)) {
		$sql = "SELECT username, account_key, name, surname from clanovi WHERE username='$username' and password = '$password'";
			$rs = izvrsiBP($sql);
				
			if(mysqli_num_rows($rs) == 0) {
				$pogreska = "Krivo korisničko ime ili lozinka!";
			} else {	
			
			if(!isset($_SESSION)) 
				{
				session_start();}			
				list($username, $account_key, $name, $surname) = mysqli_fetch_array($rs);
				$_SESSION['aktivni_korisnik'] = $username;
				
				$aktivni_korisnik_tip = $account_key;
				//slučaj da korisnik ima prazno ime ili prezime
				if($name == null && $surname == null) {
					$name = $username;
				}
				$_SESSION['aktivni_korisnik_ime'] = $name . " " . $surname;
				$_SESSION['aktivni_korisnik_tip'] = $account_key;
				header("Location:index.php");
				exit();
				
			}
			mysqli_close($conn);
		} else {
			$pogreska = "Molim unesite korisničko ime i lozinku!";
		}
	}
?>

	<div class="main">
		<div class="content-bottom">
			<div class="wrap">
				<div id="sustav_login_vanjski">
				<div id="sustavlogin_cont">		
					<p style="font-size:1.5em; margin-bottom:50px;">Prijavi se:</p>
				     <form id="prijava_forma" method="post" action="loginscreen.php">
						<p>Korisničko ime:</p>
						<input size="35" placeholder="Upišite svoje korisničko ime" autocomplete="on" name="username"/>
						<p>Lozinka:</p>
						<input type="password" placeholder="Upišite svoju lozinku" size="35" autocomplete="off" name="password"><br>
						<input type="submit" class="gumb" name="POŠALJI" value="PRIJAVA"/>
						<p id="zab_lozinka">Zaboravili ste lozinku? <br> Kontaktirajte administratora <a href="contact.php" style="text-decoration:underline;">ovdje</a></p>
						<p>
						<?php
							if ($pogreska != "") {
								echo "$pogreska";
							}
						?>
						</p>
					 </form>
					           
		   		</div>
				</div>
				<div class="clear"></div> 		
			</div>
	   </div>
	 </div>
	</div>
<?php
include("footer.php");

?>
    	
    	
            