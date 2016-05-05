$(document).ready(function(){

	//container fade in
	$('.container').hide().fadeIn(1500);


	//scrolling to page section
	$('.nav').find('ul').find('a').click(function(event) {
		event.preventDefault();
		aboveHeight = $($.attr(this, 'href')).offset().top - 30;
		if (aboveHeight < 0) {
			aboveHeight = 0;
		}
		$('html, body').animate({ scrollTop: aboveHeight }, 1200);
		$("a[href='" + theID + "']").addClass("nav-active");
	});


	//highlighting menu item script
	var aChildren = $(".nav li").children(); //all list items
	var aArray = [];
	for (var i=0; i < aChildren.length; i++) { //array filled with all nav li hrefs
		var aChild = aChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}

	$(window).scroll(function() {
		var topPos = $(window).scrollTop() + 60; // window position + height of navigation bar
		var windowHeight = $(window).height();
		var docHeight = $(document).height();

		for (var i=0; i < aArray.length; i++) {
			var mydiv = aArray[i];
			var divPos = $(mydiv).offset().top; // my div height
			var divHeight = $(mydiv).height();
			if (topPos >= divPos && topPos < (divPos + divHeight)) {
   				$("a[href='" + mydiv + "']").addClass("item-active");
			} 
			else {
    			$("a[href='" + mydiv + "']").removeClass("item-active");
			}
		}

		//if contact is too short
		if(topPos + windowHeight >= docHeight) {
			if (!$(".nav li:last-child a").hasClass("nav-active")) {
    			var navActiveCurrent = $(".nav-active").attr("href");
    			$("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
    			$(".nav li:last-child a").addClass("nav-active");
			}
		}

	});

	$(".readmore").click(function() {
		$(this).parent().children(".full-article").slideToggle("300");

		if ($(this).text()=="[+]") {
			$(this).text("[-]");
		} else if ($(this).text()=="[-]") {
			$(this).text("[+]");
		}
	});
});