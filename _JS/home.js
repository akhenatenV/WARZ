$(document).ready(function(){
	// OPEN THE /** MISSIONS **\ CONTAINER FROM THE CURRENT MISSION BTN
	// ** MOBILE **
	$('#SM_current_mission').on('click', function(){
		$('#missions_container').css({
			"display":"inline-Block",
			"position":"fixed",
			"borderRadius":"10px",
			"zIndex":"99"
		});
	});
	// OPEN THE /** MISSIONS **\ CONTAINER FROM THE CURRENT MISSION BTN
	// ** PC, TABLET **
	$('#LG_current_mission').on('click', function(){
		$('#missions_container').css({
			"display":"inline-Block",
			"position":"fixed",
			"borderRadius":"10px",
			"zIndex":"99"
		});
	});
	// OPEN THE /** ASSIGNMENTS **\ CONTAINER FROM THE CURRENT ASSIGNMENTS BTN
	// ** MOBILE **
	$('#SM_current_assignment').on('click', function(){
		$('#assignments_container').css({
			"display":"inline-Block",
			"position":"fixed",
			"borderRadius":"10px",
			"zIndex":"99"
		});
	});
	// OPEN THE /** ASSIGNMENTS **\ CONTAINER FROM THE CURRENT ASSIGNMENTS BTN
	// ** PC, TABLET **
	$('#LG_current_assignment').on('click', function(){
		$('#assignments_container').css({
			"display":"inline-Block",
			"position":"fixed",
			"borderRadius":"10px",
			"zIndex":"99"
		});
	});


});

