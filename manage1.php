<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        function checkdelete()
        {
            return confirm("Are you sure to give 10% extra Wage....");
        }
    </script>
    <style>
       .form-container{
            border: 0px solid; padding: 30px 40px;
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
    <div class="container"><br>
        <div class="align-top fixed-top"><font color='white' >Click here to</font>
            <a class="btn btn-sm btn-outline-success display-3" href="http://localhost/fbproject/index1.html"><i class="fa fa-home"></i>HOME</a>
        </div>
        
        <div class="row"><br>
           <h1 class="text-center text-capitalize text-success form-container"><b><i>"Search Players For Transfer accourding to their Name, Position & Rating"</i></b></h1>
            <div class="">
                <div class="row">
                    <form class="form-inline" action="" method="POST">
                        <div class="">
                            <input type="text" name="search" class="form-control " placeholder="Search By Name" value="">
                        </div>
                        <div class="">
                            <button class="btn btn-success">Search</button><?php 
                            include 'conn.php';
                            if(isset($_POST['search']))
                            {
                                    $skey = $_POST['search'];
                                    $q2 = "SELECT * FROM `pdnew` WHERE Name LIKE '%$skey%'";
                                    $quer = mysqli_query($con,$q2);
                                    $total = mysqli_num_rows($quer);
                                    echo "<font color='white'><b> $total Records found</b></font>";
                            }
                            ?>
                        </div>
                    </form>
                    <table class="table table-striped table-hover table-light form-container">
                        <tr class="bg-dark text-white text-center">
                            <th>Name</th>
                            <th>Position</th>
                            <th>Overall</th>
                            <th>Potential</th>
                            <th>Club</th>
                            <th>Contract_Length</th>
                            <th>Current Value(in M)</th>
                            <th>Wage(in K)</th>
                            <th>Operation</th>
                        </tr>
                        <?php
                        include 'conn.php';
                        error_reporting(0);
                        if(isset($_POST['search']))
                        {
                            $skey = $_POST['search'];
                            $qu = "SELECT * FROM `pdnew` WHERE Name LIKE '%$skey%'";
                        }
                        else
                        {
                            //$q="SELECT * FROM `pdnew`"; 
                            $skey = "";
                        }
                        
                        $quer = mysqli_query($con,$qu);
                        while($res = mysqli_fetch_array($quer))
                        {
                        ?>

                        <tr class="text-center">
                            <td>
                                <?php echo $res['Name'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Position'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Overall'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Potential'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Club'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Contract_lenght'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Current_value(in M)'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Wage(in K)'];  ?>
                            </td>
                            <td><a class="btn btn-warning" href="manage2.php?Name=<?php echo $res['Name'];?>&Club=<?php echo $res['Club'];?>" class="text-white" onclick="return checkdelete()">Transfer</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>

                    
                    
                    
                    
                    
                    <br><br><br><br><br><br>
                    <form class="form-inline" action="" method="POST">
                        <div class="">
                            <input type="text" name="search1" class="form-control " placeholder="Search By Player's Position" value="">
                        </div>
                        <div class="">
                            <button class="btn btn-primary">Search</button><?php 
                            include 'conn.php';
                            if(isset($_POST['search1']))
                            {
                                    $skey = $_POST['search1'];
                                    $q2 = "SELECT * FROM `pdnew` WHERE Position LIKE '%$skey%'";
                                    $query = mysqli_query($con,$q2);
                                    $total = mysqli_num_rows($query);
                                    echo "<font color='white'><b> $total Records found</b></font>";
                            }
                            ?>
                        </div>
                    </form>
                    <table class="table table-striped table-hover table-light form-container">
                        <tr class="bg-dark text-white text-center">
                            <th>Name</th>
                            <th>Position</th>
                            <th>Overall</th>
                            <th>Potential</th>
                            <th>Club</th>
                            <th>Contract_Length</th>
                            <th>Current Value(in M)</th>
                            <th>Wage(in K)</th>
                            <th>Operation</th>
                        </tr>
                        <?php
                        include 'conn.php';
                        error_reporting(0);
                        if(isset($_POST['search1']))
                        {
                            $skey = $_POST['search1'];
                            $q1 = "SELECT * FROM `pdnew` WHERE Position LIKE '%$skey%'";
                        }
                        else
                        {
                            //$q="SELECT * FROM `pdnew`"; 
                            $skey = "";
                        }
                        
                        $query = mysqli_query($con,$q1);
                        while($res = mysqli_fetch_array($query))
                        {
                        ?>

                        <tr class="text-center">
                            <td>
                                <?php echo $res['Name'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Position'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Overall'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Potential'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Club'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Contract_lenght'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Current_value(in M)'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Wage(in K)'];  ?>
                            </td>
                            <td><a class="btn btn-warning" href="manage2.php?Name=<?php echo $res['Name'];?>&Club=<?php echo $res['Club'];?>" class="text-white" onclick="return checkdelete()">Transfer</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>


                    
                    
                    
                    <br><br><br><br><br><br>
                    <form class="form-inline" action="" method="POST">
                        <div class="">
                            <input type="text" name="search2" class="form-control " placeholder="Search By Player's Rating" value="">
                        </div>
                        <div class="">
                            <button class="btn btn-danger">Search</button><?php 
                            include 'conn.php';
                            if(isset($_POST['search2']))
                            {
                                    $skey = $_POST['search2'];
                                    $q2 = "SELECT * FROM `pdnew` WHERE Overall LIKE '$skey%'";
                                    $query = mysqli_query($con,$q2);
                                    $total = mysqli_num_rows($query);
                                    echo "<font color='white'><b> $total Records found</b></font>";
                            }
                            ?>
                        </div>
                    </form>
                    <table class="table table-striped table-hover table-light form-container">
                        <tr class="bg-dark text-white text-center">
                            <th>Name</th>
                            <th>Position</th>
                            <th>Overall</th>
                            <th>Potential</th>
                            <th>Club</th>
                            <th>Contract_Length</th>
                            <th>Current Value(in M)</th>
                            <th>Wage(in K)</th>
                            <th>Operation</th>
                        </tr>
                        <?php
                        include 'conn.php';
                        error_reporting(0);
                        if(isset($_POST['search2']))
                        {
                            $skey = $_POST['search2'];
                            $q2 = "SELECT * FROM `pdnew` WHERE Overall LIKE '$skey%'";
                        }
                        else
                        {
                            //$q="SELECT * FROM `pdnew`"; 
                            $skey = "";
                        }
                        
                        $query = mysqli_query($con,$q2);
                        while($res = mysqli_fetch_array($query))
                        {
                        ?>

                        <tr class="text-center">
                            <td>
                                <?php echo $res['Name'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Position'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Overall'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Potential'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Club'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Contract_lenght'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Current_value(in M)'];  ?>
                            </td>
                            <td>
                                <?php echo $res['Wage(in K)'];  ?>
                            </td>
                            <td><a class="btn btn-warning" href="manage2.php?Name=<?php echo $res['Name'];?>&Club=<?php echo $res['Club'];?>" class="text-white" onclick="return checkdelete()">Transfer</a></td>

                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>