<?php
include("header.php");
?>
	<div class="main">
		<div class="content-bottom">
			<div class="wrap">
				<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
	<?php			  if (!isset($_POST['POŠALJI'])) {
  ?>
	<h3>Šaljite nam upite, rezervacije, pohvale i nedostatke</h3>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<div>
		  	<span><label>E-mail adresa:</label></span>
		  	<span><input name="email" type="text" class="textbox"></span>
		</div>
		<div>
		  	<span><label>Naslov poruke:</label></span>
		  	<span><input name="subject" type="text" class="textbox"></span>
		</div>
  			<span><label>Poruka:</label></span>
			<span><textarea name="message"> </textarea></span>
		</div>	
		<div>
	   		<span><input type="submit" name="POŠALJI" class="gumb" value="POŠALJI"></span>
	  </div>
  </form>
  <?php
} else {  
  if (isset($_POST['from'])) {
		$from = $_POST['from'];
		$naslov = $_POST['subject'];
		$email = $_POST['email'];
		$poruka = $_POST['message'];  
		$poruka = wordwrap($poruka, 70);
		$formcontent=" From: $from \n Subject: $naslov \n Message: $poruka \n Email: $email \n ";
		$prima = "branimir.hrzic@gmail.com";
		$mailheader = "From: $email \r\n";

echo "Hvala Vam! Odgovoriti ćemo Vam u što kraćem roku!<br><a href='index.html'>Povratak na početnu stranicu</a>";
  }echo ("<SCRIPT LANGUAGE='JavaScript'>
?>
				  </div>
  				</div>
				<div class="col span_1_of_3">
				  <div class="company_address">
				     	<h3>Kontakt podaci učilišta:</h3>
						    	<p>Kladje, Zanatska 36</p>
						   		<p>10430 Samobor</p>
						   		<p>Croatia</p>
				   		<p>Tel: + 385 91 604 0386</p>
				   	 	<p>Email: <span><a href="mailto:branimir.hrzic@gmail.com" target="_top">branimir.hrzic@gmail.com</a></span></p>
				   </div>
	</div>
<?php
include("footer.php");
?> 

    	
    	
            