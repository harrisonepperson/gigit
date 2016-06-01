<html>
	<head>
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->
		
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
		<!-- Reference Less JavaScript file -->
		<link rel="stylesheet/less" type="text/css" href="less/index.less">
		<script>
			less = {
				async: true
			}
		</script>
		<script src="less.min.js"></script>
	</head>
	
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<nav class="navbar navbar-custom navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#home">Home</a></li>
						<li><a href="#gig">Find a Gig</a></li> 
						<li><a href="#band">Find a Band</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="home" class="container-fluid boxen leftBox">
			<div class="shade">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
							<h1>Connecting Live Performers near you!</h1>
							<p>Gigit seeks to connect live performers to local venues.  Follow your favorite bands, and enjoy live entertainment at your favorite places to eat.</p>
							
							<a href="listener.php" class="btn-round">Get Started Now!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="gig" class="container-fluid boxen rightBox">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
						<img src="images/drums.svg" height="80%" class="center"/>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
						<h1>Got a Band?</h1>
						<p>So, you've got a rockin band and need somewhere to play, maybe even get a bit of gas money?  Gigit connects you to local venues so you can get paid to play at your favorite bars and coffee shops for your favorite friends and family!</p>
						
						<a href="band.php" class="btn-round">Get Started Now!</a>
					</div>
				</div>
			</div>
		</div>
		
		<div id="band" class="container-fluid boxen leftBox">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
						<h1>Need a Band?</h1>
						<p>People love live entertainment, but quality acts can be hard to come by.  Gigit makes it easy to find entertainers your patrons will love.  Find the right type of music for your establishment today.</p>
						
						<a href="venue.php" class="btn-round">Get Started Now!</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
						<img src="images/mic.svg" height="80%" class="center"/>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>