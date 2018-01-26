<?php
include("header.php");
include("provjera_sesije.php");
include("connect.php");

//Izmjena u bazi
$greska = "";
$status = "";
if(isset($_POST['status'])){$status = $_POST['status'];}
$username = "";

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$upit="SELECT * FROM clanovi WHERE username='$username'";
	$check=mysqli_query($conn, $upit);
	if(mysqli_num_rows($check)>0) {
				$sql = "UPDATE clanovi SET status = '$status', password='ZabranaTecaj' WHERE username = '$username'" ;
						if(!mysqli_query($conn, $sql)){
							die('Greska pri upisu u bazu' . mysqli_error($conn));
							}
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Status polaznika je izmjenjen!');
						window.location.href='http://localhost/uciliste/clanovi.php';
						</SCRIPT>");
				}
				else{
				$greska= "Upisali ste nepostojeće korisničko ime!";
				}
}			
/*Ispis iz baze*/


?>

	<div class="main">
		<div class="content-bottom">
			<div class="wrap">
				<div id="clanovi_left">
					<p id="reg_link"><a href="admin.php">REGISTRACIJA NOVOG POLAZNIKA</a></p>
					<p style="text-decoration:underline; font-size: 1.125em; margin-bottom:20px; margin-top:60px;">Izmjeni status polaznika</p>
						<form action="clanovi.php" method="post" id="izmijeni_forma">
						<p>Korisničko ime:</p>
						<input size="40" placeholder="Upišite korisničko ime" autocomplete="on" name="username"/>
						<p>Status polaznika:</p>
								<input type="radio" name="status" value="Upisao">Upisao</br>
								<input type="radio" name="status" value="Završio">Završio</br></br>
						<input type="submit" class="gumb" name="izmjeni" value="IZMJENI"/>		
						<p style="margin-top:15px;">
						<?php
							if ($greska != "") {
								echo "$greska";
							}
						?>
						</p>
						</form>
						
				</div>

				<div id="clanovi_right">
				<p style="font-size:1.125em;">Ispis korisnika iz baze:</p>
				
				<?php
$query = "SELECT * FROM clanovi";
$result = mysqli_query($conn, $query);

echo "<table>"; 
echo "<tr><td><h2></h2></td><td><h1>Ime</h1></td><td><h1>Prezime</h1></td><td><h1>Kor. ime</h1></td><td><h1>Lozinka</h1></td><td><h2>Tečaj</h2></td><td><h1>Status</h1></td></tr>";
while($row = mysqli_fetch_array($result)){  
echo "<tr>  
			<td id='ispis_left'><p>" . $row['id'] . ") </p></td>
			<td><p>" . $row['name'] . " </p></td>
			<td><p>" . $row['surname'] . "</p></td>
			<td><p>" . $row['username'] . "</p></td>
			<td><p>" . $row['password'] . "</p></td>
			<td><p>" . $row['type_of_course'] . "</p></td>
			<td><p>" . $row['status'] . "";
			if($row['status']=='Završio'){echo "<img src='images/iks.png' height='18px' width='18px' style='margin-left:15px;'/></p></td>
			</tr>";}
			if($row['status']=='Upisao'){echo "<img src='images/kvacica.png' height='18px' width='18px' style='margin-left:18px;'/></p></td>
			</tr>";}
}

echo "</table>";

mysqli_close($conn);
	
						?>
		
				</div>
				<div class="clear"></div> 		
			</div>
	   </div>
	 </div>


<?php
include("footer.php");
?>            