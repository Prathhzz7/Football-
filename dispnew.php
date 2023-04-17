<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        function checkdelete()
        {
            return confirm("Are you sure you want to Delete");
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
    <div class="container">
        <div class="col-lg-12">
           <br><br>
           <div class="btn align-top fixed-top">
                <a class="btn btn-sm btn-primary display-4" href="http://localhost/fbproject/first.html"><i class="fa fa-cog"></i>DataBase Operation</a>
            </div>
            <form class="form-inline" action="" method="POST">
                       <div class="">
                           <input type="text" name="search1" class="form-control " placeholder="Search By Name" value="">
                       </div>
                       <div class="">
                           <button class="btn btn-primary">Search</button>
                       </div>
                   </form>

            <h1 class="text-primary text-center text-md-center form-container">Table Contents</h1>
            <br>
            <table class="table table-striped table-hover table-borderless table-light form-container">
                <tr class="bg-dark text-white text-center form-container">
                    <th>Name</th>
                    <th>Position</th>
                    <th>Overall</th>
                    <th>Potential</th>
                    <th>Club</th>
                    <th>Contract_Length</th>
                    <th>Current Value(in M)</th>
                    <th>Wage(in K)</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php
                        include 'conn.php';
                        error_reporting(0);
                        if(isset($_POST['search1']))
                        {
                            $skey = $_POST['search1'];
                            $q = "SELECT * FROM `pdnew` WHERE Name LIKE '%$skey%'";
                        }
                        else
                        {
                            $q="CALL `getPDNEW`();"; 
                            $skey = "";
                        }
                        $query = mysqli_query($con,$q);
                        while($res = mysqli_fetch_array($query))
                        {
                ?>

                <tr class="text-center">
                    <td><?php echo $res['Name'];  ?></td>
                    <td><?php echo $res['Position'];  ?></td>
                    <td><?php echo $res['Overall'];  ?></td>
                    <td><?php echo $res['Potential'];  ?></td>
                    <td><?php echo $res['Club'];  ?></td>
                    <td><?php echo $res['Contract_lenght'];  ?></td>
                    <td><?php echo $res['Current_value(in M)'];  ?></td>
                    <td><?php echo $res['Wage(in K)'];  ?></td>
                    <td><a class="btn btn-danger" href="delete.php?Name=<?php echo $res['Name'];?>" class="text-white" onclick="return checkdelete()">Delete</a></td>
                    <td><a class="btn btn-success" href="update.php?Name=<?php echo $res['Name']; ?>" class="text-white">Update</a></td>
                </tr>
                <?php
                        }
                ?>
            </table>
        </div>
    </div>
</body>
</html>