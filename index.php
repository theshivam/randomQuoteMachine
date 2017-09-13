<!DOCTYPE html>
<html>
<head>
	<title>Random Quote Generator</title>
	<link rel="stylesheet" type="text/css" href="./stylesheet.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="quoteContainer">
	<div id="quote"></div>
</div>
<script type="application/javascript">

	console.log("adasdasd");
// 	function insertReply(content) {
//     document.getElementById('quote').innerHTML = content;
// }

// // create script element
// var script = document.createElement('script');
// // assing src with callback name
// script.src = 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=insertReply';
// // insert script to document and load content
// document.body.appendChild(script);




// 	var requestUrl = 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=?';
// 	var request = new XMLHttpRequest();
// 	request.open('get',requestUrl);
// 	request.responseType = 'jsonp';
// 	request.send();
// 	request.onload = function() {
// 	var data = request.response;
// 	console.log(data[0]);
// };
// $(function display(){
// 	console.log("Shivam");
// 	// console.log(content);
// });


$.ajax({
	dataType:"json",
	type:'GET',
	url: 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=',
	success:function(json){
		console.log("ddddd");
		console.log(json[0].content);
		$('#quote').append(json[0].content);
	},
	crossDomain:true,
	cache:false
});
	// var cb = Math.round(new Date().getTime() / 1000);
	// $.getJSON("http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=", function(a) {
	// 		// $("#quote").html("<p>"+a.content+"</p>");
	// 		console.log(a['content']);
	// 		console.log(a);
	// 		// $("#quote").append(a[0].content + "<p>— " + a[0].title + "</p>")
	// });

</script>
</body>
</html>