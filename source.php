<?php
function ConnectToDb()
{
	
	
	$mysqli = new mysqli("localhost", "root", "", "bincom_test");
	
	
	
	return $mysqli;
	
	
}


$mysqli = ConnectToDb();


$query=  "SELECT * FROM announced_pu_results ORDER BY polling_unit_uniqueid ASC";



/**
 * @param $mysqli
 * @param $query
 */

?>
<?php
function GetDataFromDb($mysqli, $query)
{
	
	
	if ($result = $mysqli->query($query)) {
		
		
		$select_query_run = mysqli_query($mysqli, $query);
		
		
		while ($row = mysqli_fetch_assoc($select_query_run)) {
			  echo "<tr>"
			?>
<td><?php echo $row['polling_unit_uniqueid'];

?></td>
			<td><?php echo $row['party_abbreviation'];

?></td>
			<td><?php echo $row['party_score'];

?></td>	
        <?php }
  

}


}
?>