;(function($, window, document, undefined){
$( "#login" ).click(function() {
	$( ".register" ).hide();
	$( ".login" ).show( "slow", function() {

  });
  
});

$( "#register" ).click(function() {
	$( ".login" ).hide();
	$( ".register" ).show( "slow", function() {

  });
  
});

})( jQuery, window , document );	