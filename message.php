<?php
	$mijnemail = "info@despeelberg.be";

	if((isset($_POST["Name"])) && (isset($_POST["Email"])) && (isset($_POST["Subject"])) && (isset($_POST["Message"])))
	{
		$Naam = $_POST["Name"];
		$Bericht = $_POST["Message"];
		$email = $_POST["Email"];
		$Onderwerp = $_POST["Subject"];
		
		if(isset($_POST["verzenden"]))
		{
			$headers = 'From: '. $email . "\r\n" .
					   'Reply-To: '. $email . "\r\n" .
				       'X-Mailer: PHP/' . phpversion();
			mail($mijnemail, "Contact Page - De Speelberg - ".$Onderwerp, "Email van: ".$Naam."\r\n".$Bericht, $headers);
		}
	}else{
		header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Speelplein De Speelberg, Tomberg 21A, 8791 Beveren-Leie">
    <meta name="author" content="Speelplein De Speelberg">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <title>De Speelberg</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">De Speelberg</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="index.html#info">Info</a></li>
            <li><a href="index.html#kalender">Kalender</a></li>
              <li><a href="https://www.facebook.com/speelpleinwerkingdespeelberg/" target="_blank">Facebook</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Bedankt!</h3>
				<hr>
				<p>We hebben u bericht goed ontvangen, we nemen zo snel mogelijk contact met u op.</p>
			</div>
		</div>
	</div><!-- /container -->
	
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Adres</h4>
					<p>Tomberg 21A<br/>8791 Beveren-Leie<br/></p>
				</div><!-- /col-lg-4 -->

				<div class="col-lg-4">
				</div><!-- /col-lg-4 -->

				<div class="col-lg-4 text-right">
					<h4>Contact</h4>
					<p>info@despeelberg.be</p>
					<p>Thomas Toye: 0478 78 60 81</p>
				</div><!-- /col-lg-4 -->
				<span>All rights reserved ©</span>
			</div>
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
