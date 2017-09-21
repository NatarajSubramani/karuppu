 jQuery(document).ready(function($) {
    // BANNER START //
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
	//BANNER END //
	
    $(document).ready(function() {
		$("#show-more").click(function(){
				$( "#main_area" ).removeClass("current-hide").slideDown();
				$( ".content-shows" ).removeClass("current").css("display","none");
			});
			$("#close-banner").click(function(){
				$( "#main_area" ).addClass("current-hide").slideUp();
				$( ".content-shows" ).addClass("current").css("display","block");
			});			  
	});
	
	$(document).ready(function() {
	          $.getJSON("fundtable.json", function(data){
				$.each(data.fundOverview,function(key,value){
					var row = $("<tr><td>"+this['Rank']+"</td><td>"+this['Fund']+"</td><td>"+this['Group']+"</td><td>"+this['Focus']+"</td><td>"+this['Yield']+"</td><td>"+this['1Y']+"</td><td>"+this['3Y']+"</td><td>"+this['5Y']+"</td><td>"+this['Del_function']+"</td></tr>");
					$("#price-view").append(row);
	 			
				});
				$.each(data.discretePerformance,function(key,value){
					var row = $("<tr><td>"+this['Rank']+"</td><td>"+this['Fund']+"</td><td>"+this['Group']+"</td><td>"+this['Focus']+"</td><td>"+this['Yield']+"</td><td>"+this['1Y']+"</td><td>"+this['3Y']+"</td><td>"+this['5Y']+"</td><td>"+this['Del_function']+"</td></tr>");
					$("#price-performance").append(row);
				});
                $.each(data.annualPerformance,function(key,value){
					var row = $("<tr><td>"+this['Rank']+"</td><td>"+this['Fund']+"</td><td>"+this['Group']+"</td><td>"+this['Focus']+"</td><td>"+this['Yield']+"</td><td>"+this['1Y']+"</td><td>"+this['3Y']+"</td><td>"+this['5Y']+"</td><td>"+this['Del_function']+"</td></tr>");
					$("#annual-performance").append(row);
				});				
        	}); 
 		
	});
		
});