<style type="text/css">
/*
MAIN SECTION
*/

/*  RULES CONTAINER */
	#rules_container{
		display: none;
		position: fixed;
		top: 10%;
		left: 20%;
		width: 60%;
		height: 60%;
		background-color: #004040;
		border: 3px outset #777;
		overflow-y: auto;
		z-index: 5;
	}
	/* RULES CONTAINER **** FOR MOBILE */
	@media(max-width: 991px){
		#rules_container{
			display: static;
			position: fixed;
			top: 10%;
			left: 10%;
			width: 80%;
			height: 70%;
			background-color: #004040;
			border: 3px outset #777;
			z-index: 99;
			overflow-y: auto;
		}
	}
	.rules_container_header{
		color: #ffffff;
		padding: 1rem 5%;
	}
	.rules_container_close_btn{
		position:absolute;
		top:0.2rem;
		right:0.4rem;
	}


/*  HELP CONTAINER */
	#help_container{
		display: none;
		position: fixed;
		top: 10%;
		left: 20%;
		width: 60%;
		height: 60%;
		background-color: #004040;
		border: 3px outset #777;
		overflow-y: auto;
		z-index: 5;
	}
	/* HELP CONTAINER **** FOR MOBILE */
	@media(max-width: 991px){
		#help_container{
			display: static;
			position: fixed;
			top: 10%;
			left: 10%;
			width: 80%;
			height: 70%;
			background-color: #004040;
			border: 3px outset #777;
			z-index: 99;
			overflow-y: auto;
		}
	}
	.help_container_header{
		color: #ffffff;
		padding: 1rem 5%;
	}
	.help_container_close_btn{
		position:absolute;
		top:0.2rem;
		right:0.4rem;
	}


/*  MY_PROFILE CONTAINER */
	#my_profile_container{
		display: none;
		position: fixed;
		top: 10%;
		left: 20%;
		width: 60%;
		height: 60%;
		background-color: #004040;
		border: 3px outset #777;
		overflow-y: auto;
		z-index: 5;
	}
	/* MY_PROFILE CONTAINER **** FOR MOBILE */
	@media(max-width: 991px){
		#my_profile_container{
			display: static;
			position: fixed;
			top: 10%;
			left: 10%;
			width: 80%;
			height: 70%;
			background-color: #004040;
			border: 3px outset #777;
			z-index: 99;
			overflow-y: auto;
		}
	}
	.my_profile_container_header{
		color: #ffffff;
		padding: 1rem 5%;
	}
	.my_profile_container_close_btn{
		position:absolute;
		top:0.2rem;
		right:0.4rem;
	}


/*  MY_STATS CONTAINER */
	#my_stats_container{
		display: none;
		position: fixed;
		top: 10%;
		left: 20%;
		width: 60%;
		height: 60%;
		background-color: #004040;
		border: 3px outset #777;
		overflow-y: auto;
		z-index: 5;
	}
	/* MY STATS CONTAINER **** FOR MOBILE */
	@media(max-width: 991px){
		#my_stats_container{
			display: static;
			position: fixed;
			top: 10%;
			left: 10%;
			width: 80%;
			height: 30%;
			background-color: #004040;
			border: 3px outset #777;
			z-index: 99;
			overflow-y: auto;
		}
	}
	.my_stats_container_header{
		color: #ffffff;
		padding: 1rem 5%;
	}
	.my_stats_container_close_btn{
		position:absolute;
		top:0.2rem;
		right:0.4rem;
	}




</style>

<!-- MAIN -->
<div id="rules_container">
	<div class="rules_container_header">
		<h2>The Rules</h2>
		<a class="rules_container_close_btn" onclick="closeRulesContainer()" href="javascript:void(0)">X</a>
	</div>
	<div class="rules_container_body">
		<ul>
			<li>
				Rule 1
				<p>
					Paragraph about rule 1
				</p>
				<ul>
					<li>
						Inset point about rule 1
					</li>
				</ul>
			</li>
			<li>
				Rule 3
			</li>
			<li>
				Rule 4
			</li>
			<li>
				Rule 5
			</li>
		</ul>
	</div>
</div>

<div id="help_container">
	<div class="help_container_header">
		<h2>The Help Desk</h2>
		<a class="help_container_close_btn" onclick="closeHelpContainer()" href="javascript:void(0)">X</a>
	</div>
	<div class="help_container_body">
		
	</div>
</div>

<div id="my_profile_container">
	<div class="my_profile_container_header">
		<h2>My Profile</h2>
		<a class="my_profile_container_close_btn" onclick="closeMyProfileContainer()" href="javascript:void(0)">X</a>
	</div>
	<div class="my_profile_container_body">
		
	</div>
</div>

<div id="my_stats_container">
	<div class="my_stats_container_header">
		<h2>My Stats</h2>
		<a class="my_stats_container_close_btn" onclick="closeMyStatsContainer()" href="javascript:void(0)">X</a>
	</div>
	<div class="my_stats_container_body">
		<?php
		$user_stats_q = "SELECT * FROM uc_user_stats_81220 WHERE user_id = '".$_SESSION['user_id']."'";
		$user_stats_result = mysqli_query($dbcon, $user_stats_q);
		if($user_stats_result){
			$user_stats_row = mysqli_fetch_array($user_stats_result, MYSQLI_ASSOC);
			echo '
			<div class="">
				<table>
					<tr>
						<td>
							<table>
								<tr>
									<td>
										<th>
											Rank
										</th>
									</td>
								</tr>
								<tr>
									<td>
										<th>
											Location
										</th>
									</td>
								</tr>
								<tr>
									<td>
										<th>
											Level
										</th>
									</td>
								</tr>
								<tr>
									<td>
										<th>
											Current Mission
										</th>
									</td>
								</tr>
							</table>
						</td>
			';

				echo '	
						<td>
							<table>
								<tr>
									<td>
										'.userStats('rank_name').'
									</td>
								</tr>
								<tr>
									<td>
										'.$user_stats_row['user_location'].'
									</td>
								</tr>
								<tr>
									<td>
										'.userStats('user_lvl').'
									</td>
								</tr>
								<tr>
									<td>';
										$current_mission_q = "SELECT mission_name FROM uc_missions_81220 WHERE user_id = '".$_SESSION['user_id']."'";
										$current_mission_result = @mysqli_query($dbcon, $current_mission_q);
										$current_mission_row = mysqli_fetch_array($current_mission_result, MYSQLI_ASSOC);
										$current_mission = $current_mission_row['mission_name'];
										echo $current_mission;
									echo'
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			';
		}else{
			echo mysqli_error($dbcon).$q;
		}
		?>
	</div>
</div>



