<?php
include 'conn.php';
error_reporting(0);
$q = "SELECT * FROM `pd`";
$query = mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ratings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        .form-container{
            border: 0px solid; padding: 10px 10px;
            -webkit-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
        }
        body{
            background-image: url(assets1/images/the-ball-stadion-football-the-pitch-39562.jpeg);
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="col-lg-12">
          <div class="mbr-section-btn mbri-align-right fixed-top">
                <a class="btn btn-sm btn-success display-3" href="http://localhost/fbproject/first.html"><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"></span>DataBase Operation</a>
            </div><br><br>
            
            <form class="form-inline" action="" method="POST">
                       <div class="">
                           <input type="text" name="search1" class="form-control " placeholder="Search By Any Name" value="">
                       </div>
                       <div class="">
                           <button class="btn btn-primary">Search</button>
                       </div>
                   </form>
                   
            <h1 class="text-light text-center text-md-center form-container"><b>PLAYER STATISTICS</b></h1>
            <br>
            <table class="table table-hover table-borderless table-striped table-light form-container">
                <tr class="bg-dark text-white text-center form-container">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Dribbling</th>
                    <th>Stamina</th>
                    <th>Ball Control</th>
                    <th>Passing</th>
                    <th>Interceptions</th>
                    <th>Long Shots</th>
                    <th>Positioning</th>
                    <th>Curve</th>
                    <th>Sprint Speed</th>
                    <th>crossing</th>
                    <th>Finishing</th>
                    <th>Heading</th>
                    <th>Free Kick</th>
                    <th>Pace</th>
                    <th>Penalties</th>
                    <th>Defending</th>
                    <th>Shooting</th>
                    <th>Strength</th>
                    <th>Overall Rating</th>
                </tr>
                <?php
                        include 'conn.php';
                        //$q="SELECT * FROM `pd`";
                        error_reporting(0);
                        if(isset($_POST['search1']))
                        {
                            $skey = $_POST['search1'];
                            $q = "SELECT * FROM `pd` WHERE CONCAT(`1name`, `2name`) LIKE '%$skey%' ";
                        }
                        else
                        {
                            $q="CALL `getPD`();"; 
                            $skey = "";
                        }
                        $query = mysqli_query($con,$q);
                        while($res = mysqli_fetch_array($query))
                        {
                ?>

                <tr class="text-center">
                    <td><?php echo $res['1name'];  ?></td>
                    <td><?php echo $res['2name'];  ?></td>
                    <td><?php echo $res['Position'];  ?></td>
                    <td><?php echo $res['Dribbling'];  ?></td>
                    <td><?php echo $res['Stamina'];  ?></td>
                    <td><?php echo $res['BallControl'];  ?></td>
                    <td><?php echo $res['Passing'];  ?></td>
                    <td><?php echo $res['Interceptions'];  ?></td>
                    <td><?php echo $res['LongShots'];  ?></td>
                    <td><?php echo $res['Positioning'];  ?></td>
                    <td><?php echo $res['Curve'];?></td>
                    <td><?php echo $res['SprintSpeed'];?></td>
                    <td><?php echo $res['Crossing'];?></td>
                    <td><?php echo $res['Finishing'];?></td>
                    <td><?php echo $res['Heading'];?></td>
                    <td><?php echo $res['FreeKick'];?></td>
                    <td><?php echo $res['Pace'];?></td>
                    <td><?php echo $res['Penalties'];?></td>
                    <td><?php echo $res['Defending'];?></td>
                    <td><?php echo $res['Shooting'];?></td>
                    <td><?php echo $res['Strength'];?></td>
                    <td><?php echo $res['OverallRating'];?></td>
                </tr>
                <?php
                        }
                ?>
            </table>
        </div>
    </div>
</body>
</html>