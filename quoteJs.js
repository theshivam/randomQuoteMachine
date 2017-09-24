function getRandomQuote(){
	$.ajax({
		dataType:"json",
		type:'GET',
		url: 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=',
		success:function(json){
			console.log("Random Quotation :- ");
			console.log(json[0].content);
			var quotation = "<span class='quotationMarks'>\"</span>"+"  "+json[0].content.substr(3,json[0].content.length-8)+"<span class='quotationMarks'>\"</span>";
			$('#quote').html(quotation);
			console.log(quotation);
			$('#quote').append("<p id='author'> <br />-- "+json[0].title+"</p>");
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
