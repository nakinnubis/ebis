<?php
include 'header.php';

?>

<section id="body">
    <div id="addNew">
 <div class="panel panel-default container row col-md-8 col-md-offset-2 mypanel">
    <div class="container row col-md-6 col-md-offset-3">
        <div class="form-horizontal">
            <form class="role" action="addnew.php" method="POST">
                <div class="form-group">
                    <input type="text" name="wardname" class="form-control" placeholder="Enter the ward name"
                           id="partscore"/>
                </div>
                <div class="form-group">
                    <input type="text" name="Lganame" class="form-control" placeholder="Enter the local govt name"
                           id="partscore"/>
                </div>
                 <div class="form-group">
                    <input type="text" name="Statename" class="form-control" placeholder="Enter the state name"
                           id="partscore"/>
                </div>
                <div class="form-group">

                    <?php require '2dataData.php';


                    ?>

                </div>
                <div class="form-group">
                    <input type="text" name="partscore" class="form-control" placeholder="Enter the Party Score"
                           id="partscore"/>
                </div>
                <div class="form-group">
                    <input type="text" name="puname" class="form-control" placeholder="Enter Polling unit name"
                           id="puname"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="SaveResult" class="btn btn-success" id="submit"/>
                </div>
            </form>
        </div>

    </div>

</div>

<?php

if (isset($_POST['SaveResult'])) {

    $wardname = $_POST['wardname'];

    $lganame = $_POST['Lganame'];
    $statename = $_POST['Statename'];

    $validatePartyDropDown = $_POST['partyname'];

    $partscore = $_POST['partscore'];

    $puname = $_POST['puname'];

    $i = 0;

    foreach ($validatePartyDropDown as $key => $value) {

        switch ($value) {

            case '':
                # code...each
                echo " no valid selection";

                break;

            case 'PDP':
            case 'ACN':
            case 'DPP':
            case 'PPA':
            case 'CDC':
            case 'JP':
            case 'ANPP':
            case 'LABOUR':
            case 'CPP':
                if (empty($value)) {

                    # code...
                    echo "field cannot be empty!!";

                } else {

                   

                    $mysqli = ConnectToDb();


                    $sql = "INSERT INTO puresults (WardName,LgaName,StateName,PartyName,PartyScore,PollingUnitName) VALUE('$wardname','$lganame','$statename','$value','$partscore','$puname')";

                    function SubmitPollResult($mysqli, $sql)
                    {

                        if ($mysqli->query($sql) === TRUE) {

			echo '<script language="javascript">';
				echo 'alert("your submission was successful")';
			echo '</script>';
                           

                        } else {

                            echo "Error: " . $sql . "<br>" . $mysqli->error;

                        }
                        $mysqli->close();

                    }

                    SubmitPollResult($mysqli, $sql);


                    # code...

                };

                break;

            default:
                # code...
                break;

        }


    }

    exit();

}

?> 
    </div>
  
</section>

<?php
include'footer.php';

?>
