<?php

function userStats($stat){
	include '_DBCON/dbcon.php';
	$user_stats_q = "SELECT $stat FROM uc_user_stats_81220 WHERE user_id = '".$_SESSION['user_id']."'";
	$user_stats_result = mysqli_query($dbcon, $user_stats_q);
	if($user_stats_result){
		$row = mysqli_fetch_array($user_stats_result, MYSQLI_ASSOC);
		return $row[$stat];
	}else{
		echo mysqli_error($dbcon).$user_stats_q;
	}
}




/*function buyBusiness($businessId, $moneyNeeded){
	// GETTING THE BUSINESS FROM BUSINESSE TABLE
	$q = "SELECT * FROM uc_businesses_81220 WHERE business_id = '".$businessId."' "; 
	$result = @mysqli_query($dbcon, $q);
	$row = mysqli_fetch_Array($result, MYSQLI_ASSOC);
	$business_location = $row['business_availability'];
	$business_price = $row['business_price'];

	// GETTING ALL OF THE USERS BUSINESSES
	$user_businesses_q = "SELECT * FROM uc_user_businesses_81220 WHERE business_id = '".$businessId."' "; 
	$user_businesses_result = @mysqli_query($dbcon, $q);
	$user_businesses_row = mysqli_fetch_Array($result, MYSQLI_ASSOC);
	$business_id = $user_businesses_row['business_id'];
	


	$q = "SELECT user_money FROM uc_user_stats_81220 WHERE user_id = '".$_SESSION['user_id']."' ";
	$result = @mysqli_query($dbcon, $q);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$user_money = $row['user_money'];
	$user_location = $row['user_location'];

	if($user_location == $business_location){
		if(mysqli_num_rows($user_businesses_result) < 1)
			if($user_money >= $moneyNeeded){
				// buy
				// INSERT INTO USER_BUSINESSES_TABLE () VALUES ();
			}else{
				// output not enough money
				return 'You do not have enough moneyto make this purchase';
			}
		}else{
			// output you already own it
			return 'You already own this property';
		}
	}else{
		// business not available
		return 'This business is currently not available
		';
	}
}
*/




?>