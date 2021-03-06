<!DOCTYPE html>
<html>
<head>
	<title>Random Quote Generator</title>
	<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" type="text/css" href="./stylesheet.css">
</head>
<body>
<div class="container" id="fullBody">
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
					<div class="row">
						<div class="col-sm-5 hidden-xs">
							<!-- <i class="fa fa-facebook-official socialLinks" style="font-size:26px"></i>
 -->						<a target="_blank" id="tweetQuote">
								<i class="fa fa-twitter-square socialLinks" style="font-size:36px"></i>
							</a>
							<!-- <i class="fa fa-linkedin-square socialLinks" style="font-size:26px"></i> -->
							<!-- <i class="fa fa-whatsapp socialLinks" style="font-size:26px"></i> -->
						</div>
						<!-- </div> -->
						<div class="col-sm-7 col-xs-12" >
							<button class="btn btn-default" id="newQuoteButton">
								New Quote
							</button>
						</div>
					</div>
				</div>
				<!-- <div> -->
				<div id="developerDetails">
					<h4>Developed by :- 
					<span id="shivamAgarwal"><a href="https://www.facebook.com/TheShivamAgarwal">Shivam Agarwal</a></span>
<!-- <iframe src="https://www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2FTheShivamAgarwal&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
 -->					</h4>
				</div>

		</div>
		<div class="col-sm-2 col-xs-1"></div>
	</div>
</div>
<script type="text/javascript" src="quoteJs.js"></script>
</body>
</html>