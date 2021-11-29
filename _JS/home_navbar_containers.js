/*
TURN BACKGROUND COVER ON / OFF
*/
function backgroundCoverOn(){
	var backgroundCover = document.getElementById("background_cover").style;
	backgroundCover.display="inline";
}
function backgroundCoverOff(){
	var backgroundCover = document.getElementById("background_cover").style;
	backgroundCover.display="none";
}

function display(container_id, in_none){
	var variable = document.getElementById(container_id).style.display=in_none;
	return variable;
}



/*
**** MAIN_SECTION **** 
*/

	// OPEN / CLOSE **** RULES CONTAINER

	function openRulesContainer(){
		display("rules_container", "inline");
		backgroundCoverOn();
	}
	function closeRulesContainer(){
		display("rules_container", "none");
		backgroundCoverOff();
	}


	// OPEN / CLOSE **** HELP CONTAINER

	function openHelpContainer(){
		display("help_container", "inline");
		backgroundCoverOn();
	}
	function closeHelpContainer(){
		display("help_container", "none");
		backgroundCoverOff();
	}


	// OPEN / CLOSE **** MY PROFILE CONTAINER 

	function openMyProfileContainer(){
		display("my_profile_container", "inline");
		backgroundCoverOn();
	}
	function closeMyProfileContainer(){
		display("my_profile_container", "none");
		backgroundCoverOff();
	}


	// OPEN / CLOSE MY STATS CONTAINER

	function openMyStatsContainer(){
		display("my_stats_container", "inline");
		backgroundCoverOn();
	}
	function closeMyStatsContainer(){
		display("my_stats_container", "none");
		backgroundCoverOff();
	}


/*
**** STORY_SECTION **** 
*/

	// OPEN / CLOSE CRIMES CONTAINER
	function openCrimesContainer(){
		display("crimes_container", "inline");
		backgroundCoverOn();
	}
	function closeCrimesContainer(){
		display("crimes_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE MISSIONS CONTAINER
	function openMissionsContainer(){
		display("missions_container", "inline");
		backgroundCoverOn();
	}
	function closeMissionsContainer(){
		display("missions_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE ASSIGNMENTS CONTAINER
	function openAssignmentsContainer(){
		display("assignments_container", "inline");
		backgroundCoverOn();
	}
	function closeAssignmentsContainer(){
		display("assignments_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE JOBS CONTAINER
	function openJobsContainer(){
		display("jobs_container", "inline");
		backgroundCoverOn();
	}
	function closeJobsContainer(){
		display("jobs_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE CAR THEFT CONTAINER
	function openCarTheftContainer(){
		display("car_theft_container", "inline");
		backgroundCoverOn();
	}
	function closeCarTheftContainer(){
		display("car_theft_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE BOOTLEGGING CONTAINER
	function openBootleggingContainer(){
		display("bootlegging_container", "inline");
		backgroundCoverOn();
	}
	function closeBootleggingContainer(){
		display("bootlegging_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE CREW CONTAINER
	function openCrewContainer(){
		display("crew_container", "inline");
		backgroundCoverOn();
	}
	function closeCrewContainer(){
		display("crew_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE RACKETS CONTAINER
	function openRacketsContainer(){
		display("rackets_container", "inline");
		backgroundCoverOn();
	}
	function closeRacketsContainer(){
		display("rackets_container", "none");
		backgroundCoverOff();
	}

	// OPEN / CLOSE OCS CONTAINER
	function openOcsContainer(){
		display("ocs_container", "inline");
		backgroundCoverOn();
	}
	function closeOcsContainer(){
		display("ocs_container", "none");
		backgroundCoverOff();
	}


/*
RESOURCES SECTION
*/



