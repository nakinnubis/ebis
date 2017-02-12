<?php

/**
 * Created by PhpStorm.
 * User: PROFESSIONAL
 * Date: 2/11/2017
 * Time: 2:03 AM
 */



/**
 * @return mysqli
 */

function ConnectToDb()
{
	
	$mysqli = new mysqli("www.db4free.net", "nakinnubis", "yemo1234", "bincom_test");
	
	return $mysqli;
	
}


$mysqli = ConnectToDb();


$query=  "SELECT polling_unit_name FROM polling_unit ";


/**
 * @param $mysqli
 * @param $query
 */

function GetDataFromDb($mysqli, $query)
{
	
	if ($result = $mysqli->query($query)) {
		
		$select_query_run = mysqli_query($mysqli, $query);
		
		$query = "SELECT * FROM party";
		
		$select_query_run = mysqli_query($mysqli, $query);
		
		echo "<select name='partyname[]' class='form-control'>";
		echo '<option value="">Select Party name</option>';

		while ($select_query_array = mysqli_fetch_array($select_query_run)) {
			
			echo "<option value=" . $select_query_array["partyid"] . ">" . htmlspecialchars($select_query_array["partyname"]) . "</option>";
			
		}
		
		echo "</select>";
		
		
		
	}
	
}


GetDataFromDb($mysqli, $query);


?>