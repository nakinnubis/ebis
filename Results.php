
<?php
include 'header.php';

?>
<style>
        #result{
margin-top:80px;
margin-bottom:80px;
        }
</style>
<scetion id="body">
<div class="container" id="result">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
      <thead>
      <tr>
        <th>Polling Unit Id</th>
        <th>Party Abbrevation</th>
        <th>EParty Score</th>
      </tr>
    </thead>
        <tbody>
     
       <?php include 'source.php';

?>

      </tr>
        <?php




GetDataFromDb($mysqli, $query);






?>
        </tbody>
        </table>

</div>
</scetion>

<?php
include'footer.php';

?>

