//animate

/*$(document).ready(function(){
	//$('.box').animate({left: '100px', width: '500px', top: '200px'});
	
	$('.box').hide('slow',function(){
			alert('BOX HIDDEN');
	})
});*/


/*$(document).ready(function(){
	//$('.box').animate({left: '100px', width: '500px', top: '200px'});
	
	$('.box').hide(2000).show(2000).fadeOut(2000).fadeIn(2000);
	
	
}); */

/*$(document).ready(function(){
	$('.box').html('This is <h1>another<h1> text for the box');
	console.log(boxText)
});*/

/*$("#add").click(function(){
	$(".paragraph").prepend(' <b>This is the second paragraph</b>');
});*/

/*$("#change").click(function(){
	$(".sample_box").css({'background': 'red', 'padding': '50px', 'border':'4px solid yellow'});
});*/


/*$("#change").click(function(){
	var dimention = $(document).width();
	console.log (dimention);;
});*/

/*$('#style_button').click(function(){
	$('.simple.heading').siblings().css('color','red');

});*/

$('#style_button').click(function(){
	$('.simple.heading1').not('.select').css('color','red');

});





/*$('#reg_form').on('submit',function(e){
	e.preventDefault();
	$('#first_name').val('morrhtect');
	
})*/

/*$('.box').click(function(){
	$('.box').animate({left: '250px'});
  }); */



/*$(document).ready(function(){
	//$('.box').animate({left: '100px', width: '500px', top: '200px'});
	
	$('.box').hide('slow');
			alert('BOX HIDDEN');
	
);*/

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$('#hamburger_menu').click(function(){
			$('#media_menu').slideToggle('slow');
		});
		
		
		
		
	
	