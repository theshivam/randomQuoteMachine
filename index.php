<!DOCTYPE html>
<html>
<head>
	<title>Random Quote Generator</title>
	<link rel="stylesheet" type="text/css" href="./stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<header class="row" id="headerContainer">
		<div class="col-sm-12 col-xs-12 col-md-12 navbar-fixed-top navbar-inverse">
			<h2 id="headerTitle">Random Quote Generator</h2>
		</div>		
	</header>
<!-- </div> -->
<!-- <div class="container"> -->
	<div class="row">
		<div class="col-sm-2 col-xs-1"></div>
		<div class="col-sm-8 col-xs-10">
				<div id="quoteContainer">
					<div id="quote">
					</div>
					<div>
						<i class="fa fa-facebook-official" style="font-size:26px"></i>
						<i class="fa fa-twitter-square" style="font-size:26px"></i>
						<i class="fa fa-linkedin-square" style="font-size:26px"></i>
						<i class="fa fa-whatsapp" style="font-size:26px"></i>
						<button class="btn btn-info" id="newQuoteButton">New Quote</button>
					</div>
				</div>
		</div>
		<div class="col-sm-2 col-xs-1"></div>
	</div>
</div>
<script type="text/javascript" src="quoteJs.js"></script>
</body>
</html>