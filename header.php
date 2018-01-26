<?php
session_start();
ob_start();
$aktivni_korisnik=0;
$aktivni_korisnik_tip=-1;
if(isset($_SESSION['aktivni_korisnik'])){	
	$aktivni_korisnik=$_SESSION['aktivni_korisnik'];	
	$aktivni_korisnik_tip=$_SESSION['aktivni_korisnik_tip'];	
	$aktivni_korisnik_tip=(int) $aktivni_korisnik_tip;	
	$aktivni_korisnik_ime=$_SESSION['aktivni_korisnik_ime'];
}?>

<!DOCTYPE HTML>
<html>
<head>
<title>Učilište Hržić</title>
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
									<script type="text/javascript">
									function generatePassword() {
										var length = 6,
											charset = "abcdefghijklnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
											retVal = "";
										for (var i = 0, n = charset.length; i < length; ++i) {
											retVal += charset.charAt(Math.floor(Math.random() * n));
										}
										document.getElementById('polje').value=retVal;
									}
									</script>


</head>
<body>
<div class="header">	
	<div class="wrap"> 
		<div class="header-top">
		<div class="header-opis"><h1>Projekt iz kolegija:
		<br><strong>Web aplikacije</strong><br><br>
		Naziv projekta:<br>
		<strong>Online Učilište</strong></h1></div>
			 			 <div class="logo">
					<img class="kapa" src="images/logo/diploma.png" width="300px" height="155px" style="position:relative; z-index:0; margin: -15px 0 0 420px;"/>
			 </div>
			 <div class="cart">
				<div class="span6 header-sidebar" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
					<div id="login_cont"><?php
		if ($aktivni_korisnik===0){	echo "<p class='logg'>Trenutno ste neprijavljeni</p>"; } 			
			else{ echo"<p class='logg'>Dobrodošli, $aktivni_korisnik_ime </p>";}		
		
?>
					<?php
											if ($aktivni_korisnik===0) {
											echo "<a class='login_button' href='loginscreen.php' style='font-size:1.5em; color:#FFFF33;'>Prijava</a>";}
											else {
											echo "<a class='login_button' href='loginscreen.php?logout=1'>Odjava</a>";}?>
												   
					</div>
						
					<div class="ph-no">
		    			Kontakt za informacije<br><span class="phone-number">+385 91 604 0386</span><br>
						<a href="mailto:branimir.hrzic@gmail.com">branimir.hrzic@gmail.com</a>
					</div>
				</div>
			</div>	
			<div class="clear"></div> 
	   	</div>
	</div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div id="cssmenu">
			<ul>
			   <li class="active"><a href='../uciliste/index.php' alt="Povratak" title="Povratak">
			   <img class="backarrow" src="images/back.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			   <li><a href="index.php" alt="O nama" title="O nama"><span>O nama</span></a></li>
			   <li class="has-sub"><a href='#' title="Programi obrazovanja" alt="Programi obrazovanja"><span>Programi obrazovanja</span></a>
			      <ul>
			         <li class="has-sub"><a href='tecaj_php.php'><span>Tečaj PHP</span></a></li>
			         <li class="has-sub"><a href='tecaj_mysql.php'><span>Tečaj MySQL</span></a></li>
			         <li class="has-sub"><a href='tecaj_html.php'><span>Tečaj HTML</span></a></li>
			         <li class="has-sub"><a href='tecaj_css.php'><span>Tečaj CSS</span></a></li>
			      </ul>
			   </li>
			   
			   <?php
											if ($aktivni_korisnik_tip===0){
											echo "<li class='has-sub'><a class='' href='clanovi.php' style='color:#FFFF33';>Članovi</a></li>";}
											else if($aktivni_korisnik_tip===1){
											echo "<li class='has-sub'><a href='#' title='Materijali i obavijesti' alt='Materijali i obavijesti'><span style='color:yellow'>Materijali i obavijesti</span></a>
											      <ul>
											         <li class='has-sub'><a href='php_materijali.php'><span>PHP</span></a></li>
											         <li class='has-sub'><a href='mysql_materijali.php'><span>MySQL</span></a></li>
													 <li class='has-sub'><a href='html_materijali.php'><span>HTML</span></a></li>
											         <li class='has-sub'><a href='css_materijali.php'><span>CSS</span></a></li>
											         <li class='has-sub'><a href='rokovi.php'><span>Ispitni rokovi</span></a></li>
											      </ul>
											      </li>									
											";
																						
											echo "<li class='has-sub'><a href='#' title='Administracija' alt='Administracija'><span style='color:red'>Administracija</span></a>
											      <ul>
											         <li class='has-sub'><a href='admin.php'><span>Novi polaznik</span></a></li>
											         <li class='has-sub'><a href='clanovi.php'><span>Popis i ažuriranje polaznika</span></a></li>													 
											      </ul>
											      </li>									
											";
																				
											
											echo "<li class='dodatno2'><a class='' href='o_projektu.php' style='color:green;';>O PROJEKTU</a></li>";
											    
}

												
											?>
											<li class='last'><a href='contact.php' alt="Contact us" title="Contact us"><span>Kontakt</span></a></li>
											
																		</ul>
		</div>

		<div class="clear"></div> 
	</div>
</div>
