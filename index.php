<?php
	function dbconnect(){
		$user = "red";
		$pass= "admin";
	$dbh = new PDO('mysql:host=localhost;dbname=mixterest', $user, $pass) or die("erreur de connexion au serveur $host");}

select * from 



 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--css-->
		<link rel="stylesheet" type="text/css" href="css/portfolio.css">
		<!-- bootstrap 4-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<!--jquery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	</head>
	<body>
		
		<div class="container"><!--main container-->
		<!--navigation bar fixed-->
		<div class="container-fluid">
			<nav class="navbar navbar-fixed-top navbar-dark bg-inverse navbar-right">
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">blop
				&#9787;
				</button>
				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
					<a class="navbar-brand" href="#">Red-Folio</a>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/bootstrap.html">Bootstrap</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Kali</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Php</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		
		<!--header begin here-->
		<header>
			<div class="container-fluid car">
				<!--a little desrib of me-->
				<!--My Boostrap 4 slider-->
				<div class="col-md-12 col-sm-12">
				<h2>Welcome on my RedFolio!<title>Here i use a text-shadow css in yellow</title></h2>

				<h3>I'm Julien and i am passionate by the numerique world since 10 years</h3>
				<h4>In self-educated, i learn web and network technologies </h4>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img height="768px" width="1366px" src="img/bootstrap.png" alt="First slide">
								<div class="carousel-caption">
									<h3>Boostrap 4</h3>
									<p> My responsive design with Alpha Bootstrap 4 version</p>
								</div>
							</div>
							<div class="carousel-item">
								<img height="768px" width="1366px" src="img/kali.jpg" alt="Second slide">
								<div class="carousel-caption">
									<h3>Secure You're skillz White the most Popular :Kali</h3>
									<p>Ethical Thing we trust !</p>
								</div>
							</div>
							<div class="carousel-item">
								<img height="768px" width="1366px" src="img/php.png" alt="Third slide">
								<div class="carousel-caption">
									<h3>More One Hobby !</h3>
									<p>We're the passion of a life !</p>
								</div>
							</div>
						</div>
						<!--button for slide picture-->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</header>
		<!--ending of header-->
		<!--separate-->
		<div class="hr"></div>
				<!-- my first section with an describ how i use the framework-->
				<section class="first">
							<!--here i hide this code for works without the css animating-->
							<!--class="first"--> <!--the class must be put in the <section>-->
							<div class="chart"></div>
					<div class="container-fluid">
						<div class="col-md-4">
							<div class="img1"></div>
							<figcaption>Bootstrap 4 sublime you're code</figcaption>
						</div>
						<div class="col-md-8">
							<h1>The News</h1>
							<p> News fonctionnalities</p>
							<h2>Enjoy now the new bootstrap 4 experiments  : find your remaster components to contemporary taste : jumbotron improved website , canvas , functionalities added to the container and many others , they will Enjoy your developments !!! </h2>
						</div>
					</div>
				</section>
	<!--separate-->
	<div class="hr"></div>
				<!-- my second section with an describ how i apply the security-->
				<section class="first">
							<!--here i hide this code for works without the css animating-->
							<!--class="second" --> <!--the class must be put in the <section>-->
							<div class="chart"></div>
					<div class="container-fluid">
						<div class="col-md-4">
							<div class="img2"></div>
								<figcaption>Sécurity Research and Development</figcaption>
						</div>
						<div class="col-md-8">
							<h1>Kali Linux</h1>
							<p>Ethics penetration test</p>
							<h2>Ethercap , Metasploit , Nmap , Nikto and many others: Because nobody want an unsafe project, I deploy my knowledge of many tools of the most populary and legendary distribution :"Kali linux" in most of my skillz  </h2>
						</div>
					</div>
				</section>
	<!--separate-->			
	<div class="hr"></div>
				<!--my third section with an describ how i use many tools of php/sql-->
				<section class="first">
							<!--here i hide this code for works without the css animating-->
							<!--class="third" --> <!--the class must be put in the <section>-->
							<div class="chart"></div>
			
						<div class="container-fluid">
							<div class="col-md-4">
								<div class="img3"></div>
									<figcaption>Php 7</figcaption>
							</div>
							<div class="col-md-8">
								<h1>Php 7</h1>
								<p>You're dynamise sites</p>
								<h2>Upload your contained , synchronize your database files , Php will revolutionize your development </h2>
							</div>
						</div>
				</section>
		<!--begin of footer-->				
		<footer>
			<div class="container-fluid">
				<div class="col-md-12 col-sm-10">
					<div class="col-md-6 col-sm-3">
						<!--here i use my reproduct of nintendo logo-->
						<h6 class="nintendo">Powered By Julien.V</h6>
						<!--legacy copyright--><!-- integrate licencing GPL or wtfpl is comming-->
						<p>Copyright © ShambhalaCorp 2016</p>
					</div>
					
					
				</div>
				
				<div class="col-md-12 col-sm-10">
					<div class="col-md-8 col-md-6">
						<h2>show footer code</h2>
						<!-- Trigger the modal with a button -->
						<button type="button" class="btn place" data-toggle="modal" data-target="#myModal">clic me</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
								
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">My code</h4>
									</div>
									<div class="modal-body">
<pre><code><!-- here i show my code for user view-->
&lt;footer class="footer"&gt;
	&lt;div class="col-md-12"&gt;
		&lt;div class="col-md-4"&gt;
			&lt;h6 class="nintendo"&gt;Powered By Dr.Redfish&lt;/h6&gt;
			&lt;p&gt;Copyright "©" ShambhalaCorp 2016&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;       
&lt;footer&gt;
</code></pre>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
								
							</div>
						</div>
						
						
						
						
						
					</div>
				</div>
			</div>
		</footer><!--footer ending-->
</div>
<!--scroll-->
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>