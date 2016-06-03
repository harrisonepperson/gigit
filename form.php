<html>
	<head>
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->
		
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
		<!-- Reference Less JavaScript file -->
		<link rel="stylesheet/less" type="text/css" href="less/index.less">
		<link rel="stylesheet/less" type="text/css" href="less/form.less">
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
						<li><a href="index.php#home">Home</a></li>
						<li><a href="index.php#gig">Find a Gig</a></li> 
						<li><a href="index.php#band">Find a Band</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<form>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 shade">
						<h3>What type of music?</h3>
					
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<label><input type="checkbox" name="genre" value="alternative"/><span class="checks">Alternative</span></label><br />
								<label><input type="checkbox" name="genre" value="blues"/><span class="checks">Blues</span></label><br />
								<label><input type="checkbox" name="genre" value="classical"/><span class="checks">Classical</span></label><br />
								<label><input type="checkbox" name="genre" value="country"/><span class="checks">Country</span></label><br />
								<label><input type="checkbox" name="genre" value="eDM"/><span class="checks">EDM</span></label><br />
								<label><input type="checkbox" name="genre" value="gospel"/><span class="checks">Gospel</span></label><br />
								<label><input type="checkbox" name="genre" value="hip Hop"/><span class="checks">Hip Hop</span></label><br />
								<label><input type="checkbox" name="genre" value="jazz"/><span class="checks">Jazz</span></label><br />
								<label><input type="checkbox" name="genre" value="metal"/><span class="checks">Metal</span></label><br />
								<label><input type="checkbox" name="genre" value="new Age"/><span class="checks">New Age</span></label><br />
								<label><input type="checkbox" name="genre" value="opera"/><span class="checks">Opera</span></label><br />
								<label><input type="checkbox" name="genre" value="pop"/><span class="checks">Pop</span></label><br />
								<label><input type="checkbox" name="genre" value="rap"/><span class="checks">Rap</span></label><br />
								<label><input type="checkbox" name="genre" value="reggae"/><span class="checks">Reggae</span></label><br />
								<label><input type="checkbox" name="genre" value="rock"/><span class="checks">Rock</span></label><br />
								<label><input type="checkbox" name="genre" value="soul"/><span class="checks">Soul</span></label><br />
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
						<div class="row">
							<div class="col-xs-12 shade">
								<h3>What type of locale</h3>

								<label><input type="radio" name="locale" value="coffee"/><span class="checks">Coffee Shop</span></label><br />
								<label><input type="radio" name="locale" value="bar"/><span class="checks">Bar</span></label><br />
								<label><input type="radio" name="locale" value="house"/><span class="checks">House</span></label><br />
								<label><input type="radio" name="locale" value="park"/><span class="checks">Park</span></label><br />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 shadeInner">
								<h3>How old are you?</h3>
								
								<label><input type="radio" name="age" value="young"/><span class="checks">< 18</span>
								</label><label><input type="radio" name="age" value="young"/><span class="checks">18 - 21</span></label>
								<label><input type="radio" name="age" value="old"/><span class="checks">> 21</span></label><br />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="center">
								<input type="submit" value="Submit"><input type="reset" value="Clear">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>