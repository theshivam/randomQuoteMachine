var colors = [
  "#16a085",
  "#27ae60",
  "#2c3e50",
  "#f39c12",
  "#e74c3c",
  "#9b59b6",
  "#FB6964",
  "#342224",
  "#472E32",
  "#BDBB99",
  "#77B1A9",
  "#73A857"
];
var currentQuote = "";
function getRandomQuote(){
	$.ajax({
		dataType:"json",
		type:'GET',
		url: 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=',
		success:function(json){
			console.log("Random Quotation :- ");
			console.log(json[0].content);
			currentQuote = json[0].content.substr(3,json[0].content.length-8);
			var quotation = "<span class='quotationMarks'>\"</span>"+"  "+currentQuote+"<span class='quotationMarks'>\"</span>";
			$('#quote').html(quotation);
			console.log(quotation);
			$('#quote').append("<p id='author'> <br />-- "+json[0].title+"</p>");
			var c = Math.floor(Math.random()*12);
			$('body, #newQuoteButton').css('background-color',colors[c]);
			$('#newQuote').css('color',colors[c]);
		},
		crossDomain:true,
		cache:false
	});
}

/* Working replacement of the above code

	var cb = Math.round(new Date().getTime() / 1000);
	$.getJSON("http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback="+cb, function(a) {
			// $("#quote").html("<p>"+a.content+"</p>");
			console.log(a[0].content);
			console.log(a);
			$("#quote").append(a[0].content)
	});
*/

window.onload = getRandomQuote;
$('#newQuoteButton')
	.click(
		function(){
			$('#quote').html("");
			getRandomQuote();
		});
$('#tweetQuote').click(function(){
	var url = "https://twitter.com/intent/tweet?hashtags=Quotation&related=RandomQuoteGenerator&text="+encodeURIComponent('"'+currentQuote+'"');
	window.open(url);
	// console.log("jkjkjjkj");
});

