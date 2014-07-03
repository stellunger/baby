$(function(){
	
  $('.b-select-color a').click(function(e) {
	  	$('.b-main-card-img img').attr('src',$(this).attr('href'));
		return false;  
  });
});


