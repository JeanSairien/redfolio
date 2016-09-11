<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--css-->
		<link rel="stylesheet" type="text/css" href="css/portfolio.css">
		<!-- bootstrap 4-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<!--scroll-->
		<script src="js/script.js" type="text/javascript"></script>
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
				<h2>Welcome on my RedFolio!</h2>
				<h3>I'm Julien and i am passionate by the numerique world since 10 years</h3>
				<h4>In self-educated, i learn web and network technologies </h4>
				<!--My Boostrap 4 slider-->
				<div class="col-md-12 col-sm-12">
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
		<div class="hr"></div><!--separate-->
		<!-- my first section white an describ how i use the framework-->
		<section>			<!--here i hide this code for works without the css animating-->
		<!--class="first"--> <!--the class must be put in the <section>-->
		<!--<div class="chart"></div>-->
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
	<div class="hr"></div>
	<section>		<!--here i hide this code for works without the css animating-->
	<!--class="second" --> <!--the class must be put in the <section>-->
	<!--<div class="chart"></div>-->
	<div class="container-fluid">
		<div class="col-md-4">
			<div class="img2"></div>
			<!--<img href="" height="150px" width="180px" src="img/kali.jpg"/>-->
			<figcaption>Sécurity Research and Development</figcaption>
		</div>
		<div class="col-md-8">
			<h1>Kali Linux</h1>
			<p>Ethics penetration test</p>
			<h2>Ethercap , Metasploit , Nmap , Nikto and many others: Because nobody want an unsafe project, I deploy my knowledge of many tools of the most populary and legendary distribution :"Kali linux" in most of my skillz  </h2>
		</div>
	</div>
</section>
<div class="hr"></div>
<section><!--class="third"-->
<div class="container-fluid">
	<!--<div class="chart"></div>-->
	<div class="col-md-4">
		<div class="img3"></div>
		<!--<img href="" height="150px" width="180px" src="img/php.jpg"/>-->
		<figcaption>Php 7 </figcaption>
	</div>
	<div class="col-md-8">
		<h1>Php 7</h1>
		<p>You're dynamise sites</p>
		<h2>Upload your contained , synchronize your database files , Php will revolutionize your development </h2>
	</div>
</div>
</section>
<footer>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="col-md-4 col-sm-2 ">
			<h6 class="nintendo">Powered By Dr.Redfish</h6>
		</div>
		<div class="col-md-8">
			<p>Copyright © ShambhalaCorp 2016</p>
		</div>
	</div>
	
	<div class="col-md-12">
		<div class="col-md-8">
			<h2>voir le code du footer</h2>
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn" data-toggle="modal" data-target="#myModal">cliquez moi</button>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Modal Header</h4>
						</div>
						<div class="modal-body">
							<pre><code>
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
</footer>
</div>

</body>
</html>