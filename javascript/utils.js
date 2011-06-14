var Utils = {
	//randomly sort an array
	shuffleArray : function(arr){
	    var i = arr.length, j, temp;
	    if (i == 0) return;
	    while (--i) {
	        j = Math.floor(Math.random() * (i + 1));
	        temp = arr[i];
	        arr[i] = arr[j];
	        arr[j] = temp;
	    }
	    return arr;
	},
	
	//generates button that will scroll to the top of the page
	scrollTopButton : function(scrollSpeed){
		scrollSpeed = scrollSpeed || 600;
		
		$('body').append('<a href="javascript:void(0);" class="top_button">Top</a>');	
		$('.top_button').click(function(){
			$(window).scrollTo(0, scrollSpeed);
		});		
		if($(window).scrollTop() != 0){
			$('.top_button').fadeIn('slow');
		}
		$(document).scroll(function(){
			if($(window).scrollTop() == 0){
				$('.top_button').fadeOut('slow');
			}
			else{
				$('.top_button').fadeIn('slow');
			}
		});
	},

    count : function(obj)
    {
        var count = 0;
        for(var i in obj)
        {
            count++;
        }
        return count;
    }
};
