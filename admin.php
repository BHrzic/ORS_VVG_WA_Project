<?php
include("header.php");
include("provjera_sesije.php");

?>

	<div class="main">
		<div class="content-bottom">
			<div class="wrap">
				<div id="admin_cont">		
					<p style="font-size:1.5em; margin-bottom:50px;">Registriraj novog polaznika:</p>
				     <form id="prijava_forma" action="upis.php" method="post">
						<div id="admin_cont_left">
							<p>Ime:</p>
							<input size="35" placeholder="Upišite ime polaznika" autocomplete="on" name="name"/>
							<p>Prezime:</p>
							<input placeholder="Upišite prezime polaznika" name="surname" size="35" autocomplete="on"><br>
							<p>E-mail:</p>
							<input size="35" placeholder="Upišite e-mail polaznika" autocomplete="on" name="email"/>
							<p>Adresa:</p>
							<input size="35" placeholder="Upišite adresu polaznika" autocomplete="on" name="adress"/>
							<p>Datum rođenja:</p>
							<input size="35" placeholder="Upišite datum rođenja polaznika" autocomplete="on" name="date_birth"/>
							<p>Datum početka osposobljavanja:</p>
							<input size="45" placeholder="Upišite datum početka osposobljavanja" autocomplete="on" name="date_signup"/>
							<p>Datum završetka osposobljavanja:</p>
							<input size="45" placeholder="Upišite datum završetka osposobljavanja" autocomplete="on" name="date_end"/>

						</div>
						<div id="admin_cont_right">
							<p>Vrsta osposobljavanja:</p>
								<select name="type_of_course">
									<option value="HTML">HTML</option>
									<option value="CSS">CSS</option>
									<option value="MySQL">MySQL</option>
									<option value="PHP">PHP</option>
								</select>
							</br>
							<p>Status polaznika:</p>
								<input type="radio" name="status" value="Upisao">Upisao</br>
								<input type="radio" name="status" value="Završio">Završio</br></br>
							
							<p>Korisničko ime:</p>
								<input size="35" placeholder="Upišite korisničko ime polaznika" autocomplete="on" name="username"/>
							<p>Lozinka:</p>
								<input size="35" autocomplete="off" placeholder="Upišite lozinku polaznika" name="password" id="polje"/> 
								
								<input type="button" onclick="generatePassword()" class="gumb" name="generiraj" value="GENERIRAJ"/> </br>
							<input type="submit" class="gumb" name="registriraj" value="REGISTRIRAJ"/>
							<input type="reset" class="gumb" name="reset" value="RESET" onclick="reset();"/>
							<div class="checkboxes">

    </div>
						</div>
					 </form>
		   		</div>
				<div class="clear"></div> 		
			</div>
	   </div>
	 </div>
	</div>

<?php
include("footer.php");
?>            