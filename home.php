<?php
# INITIALIZE CONNECTION 
require '_INIT/core.php';

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Warz | <?php echo date('Y'); ?></title>
		<a href="https://snyk.io/test/npm/jquery/3.5.1"><img src="https://snyk.io/test/npm/jquery/3.5.1/badge.svg" alt="Known Vulnerabilities" data-canonical-src="https://snyk.io/test/npm/jquery/3.5.1" style="max-width:100%;"></a>

		<!-- META DATA -->
		<meta charset="utf-8">
		
		<!-- BOOTSTRAP -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<!-- STYLE SHEET -->
		<link rel="stylesheet" type="text/css" href="_CSS/home.css?v=0.13">

		<!-- JQUERY -->
		<script type="text/javascript" src="_JS/jquery.js"></script>

		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="_JS/home.js?v=02"></script>
		<script type="text/javascript" src="_JS/home_navbar_containers.js?v=10"></script>
	</head>
	<body>
		<div id="wrapper">
			<!-- BACKGROUND COVER -->
			<div id="background_cover"></div>
			<!-- CONTAINERS -->
			<?php include '_INC/home_navbar_containers_main.php'; ?>
			<?php include '_INC/home_navbar_containers_story.php'; ?>

			<div id="game_display">
				<button class="current_mission_btn-header" id="SM_current_mission" style="float:right; background:transparent; border:none; width:200px;">
					<div id="current_mission_wrapper" style="float:right; position:relative; margin-top:0px; background-color:#552B00;  border: 3px solid #8C4600; border-radius: 8px; width:200px;">
						<div class="current_mission_header" style="font-size: 12px; background-color:#8C4600; color:#FF9D3C;text-align: center;">
								Current Mission
						</div>
						<span style="font-size: 16px; color:#ffffff;text-align:center;">No Missions<br></span>
					</div>
				</button>
					
				<button class="current_assignment_btn-header" id="SM_current_assignment" style="float:right; background:transparent; border:none; width:200px;">
					<div id="current_assignment_wrapper" style="float:right; position:relative; margin-top:0px; background-color:#b28500;  border: 3px solid #8C4600; border-radius: 8px; width:200px;">
						<div class="current_assignment_header" style="font-size: 12px; background-color:#8A6800; color:#ffd24d;text-align: center;">
							Current Assignment
						</div>
						<span style="font-size: 16px; color:#ffffff;text-align:center;">No Assignments</span>
					</div>
				</button>
			</div>
			
			<div class="row" style="--bs-gutter-x: 0.01rem;">
				<div class="col col-lg-2 col-md-6 col-sm-6">
					<div class="nav_panel_left">
						<div class="">
							<ul class="navbar_list_left">
								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>Main</h3></a>
								</li>
								<li class="nav-item">
									<a href="home.php" class="nav_link">Home</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openRulesContainer()" class="nav_link">Rules</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openHelpContainer()" class="nav_link">Help Desk (FAQ)</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openMyProfileContainer()" class="nav_link">My Profile</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openMyStatsContainer()" class="nav_link">My Stats</a>
								</li>


								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>Story</h3></a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openCrimesContainer()" class="nav_link">Crimes</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openMissionsContainer()" class="nav_link">Missions</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openAssignmentsContainer()" class="nav_link">Assignments</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openJobsContainer()" class="nav_link">Jobs</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openCarTheftContainer()" class="nav_link">Car Theft</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openBootleggingContainer()" class="nav_link">Bootlegging</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openCrewContainer()" class="nav_link">Crew</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openRacketsContainer()" class="nav_link">Rackets</a>
								</li>
								<li class="nav-item">
									<a href="javascript:void(0)" onclick="openOcsContainer()" class="nav_link">Oc's</a>
								</li>


								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>
									Resources</h3></a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Market</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Hospital</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Jail</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Stocks</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Train Station</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Air port</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Town Bank</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Swiss Bank</a>
								</li>


								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>
									Realty</h3></a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Buy / Sell Businesses</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Buy / Sell Labs</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Buy / Sell Hqs</a>
								</li>

								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>
									Options</h3></a>
								</li>

							</ul>
						</div>
					</div>
				</div>

				<div class="center_image col col-lg-8 col-md-0 col-sm-12">
					<button class="current_mission_btn-header" id="LG_current_mission" style="float:right; background:transparent; border:none; width:200px;">
						<div id="current_mission_wrapper" style="float:right; position:relative; margin-top:0px; background-color:#552B00;  border: 3px solid #8C4600; border-radius: 8px; width:200px;">
							<div class="current_mission_header" style="font-size: 12px; background-color:#8C4600; color:#FF9D3C;text-align: center;">
									Current Mission
							</div>
							<span style="font-size: 16px; color:#ffffff;text-align:center;">No Missions<br></span>
						</div>
					</button>
						
					<button class="current_assignment_btn-header" id="LG_current_assignment" style="float:right; background:transparent; border:none; width:200px;">
						<div id="current_assignment_wrapper" style="float:right; position:relative; margin-top:0px; background-color:#b28500;  border: 3px solid #8C4600; border-radius: 8px; width:200px;">
							<div class="current_assignment_header" style="font-size: 12px; background-color:#8A6800; color:#ffd24d;text-align: center;">
								Current Assignment
							</div>
							<span style="font-size: 16px; color:#ffffff;text-align:center;">No Assignments</span>
						</div>
					</button>
				</div>

				<div id="navbar_pannel_right" class="col col-lg-2 col-md-6 col-sm-6">
					<div class="nav_panel_right">
						<div>
							<ul class="navbar_list_left">
								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>Information</h3></a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Home</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav_link">Rules</a>
								</li>

								<li class="nav-item_header">
									<a href="" class="nav_link_header"><h3>Wealth</h3></a>
								</li>
								<li class="nav-item">
									<span class="nav_link">Money £ </span><span style="color:#00ff00;"><?php echo number_format(userStats('user_money'));?></span>
								</li>
								<li class="nav-item">
									<span class="nav_link">Dirty Money £ </span><span style="color:#00ff00;"><?php echo number_format(userStats('user_dirty_money'));?></span>
								</li>
								<li class="nav-item">
									<span class="nav_link">Income £ </span><span style="color:#00ff00;"><?php echo number_format(userStats('user_income'));?></span>
								</li>
								<li class="nav-item">
									<span class="nav_link">Ilegal Income £ </span><span style="color:#00ff00;"><?php echo number_format(userStats('user_illegal_income'));?></span>
								</li>

								<li class="nav-item_header">
									<span class="nav_link_header"><h3>Rank / Stats</h3></span>
								</li>
								<li class="nav-item">
									<span class="nav_link">status: <?php echo userStats('rank_name'); ?></span><br>
									<?php
									echo'
									<progress value="'.userStats('user_xp').'" max="'.userStats('user_max_xp').'">
									';
									?>
								</li>
								<li class="nav-item">
									<span class="nav_link">Level: <?php echo userStats('user_lvl'); ?></span>
								</li>
								<li class="nav-item">
									<span class="nav_link">Hp <?php echo userStats('user_hp') . ' / '.  userStats('user_max_hp'); ?></span>
								</li>
								<li class="nav-item">
									<span class="nav_link">Energy</span><br>
									<?php
									// Getting the percentage of the energy and max energy for the energy bar
									$width = (userStats('user_energy') * 100) / userStats('user_max_energy');
									echo '
									<div class="progress">
										<div class="progress-bar" role="progressbar" 
											style="max-width:100%; width: '.$width.'%;" 
											aria-valuenow="'.userStats('user_energy').'" 
											aria-valuemin="0" "
											aria-valuemax="'.userStats('user_max_energy').'">
											'.userStats('user_energy').'
										</div>
									</div>';
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</body>
</html>