<?php

include 'conn.php';
if(isset($_POST['done']))
{
    $name=$_GET['Name'];
    $Name = $_POST['name'];
    $pos=$_POST['position'];
    $over=$_POST['overall'];
    $pot=$_POST['potential'];
    $club=$_POST['club'];
    $cl=$_POST['contract'];
    $cv=$_POST['value'];
    $wage=$_POST['wage'];
    
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body {

            background-image: url(assets1/images/the-ball-stadion-football-the-pitch-39562.jpeg);
            background-size: cover;
            background-attachment: fixed;
        }
        .form-container{
            border: 0px solid; padding: 30px 40px;
            -webkit-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
        }
        .color-container{
            color: black;
            text-decoration-style: double;
            font-size: 16px;
            font-style: oblique;
        }
    </style>
</head>

<body>
    <div class="col-md-5 m-auto">
        <form method="post" action="">
            <br><br>
            <div class="form-container color-container">
              <div class="card-header">  
               <?php
                error_reporting(0);
                if($name!="" && $pos!="" && $over!="" && $pot!="" && $club!="" && $cl!="" && $cv!="" && $wage!="")
                {
                    $q=" UPDATE `pdnew` SET Name ='$Name',`Position`='$pos',`Overall`=$over,`Potential`=$pot,`Club`='$club',`Contract_lenght`='$cl',`Current_value(in M)`=$cv,`Wage(in K)`=$wage WHERE Name ='$name' ";
                    $query = mysqli_query($con,$q);
                    if($query)
                        echo "<font color='white'>Data Updated Successfully. <a href='dispnew.php'>Check Updated List Here</a></font>";

                }
                else
                {
                    echo "<font color='white'>All fields are required</font>";
                }

                    
                ?></div>
                <div class="card-header">
                    <h1 class="text-primary text-center">UPDATE Operation</h1>
                </div>
                
                <lable>Name:</lable>
                <input type="text" name="name" class="form-control" value="<?php echo $_GET['Name']  ?>">

                <lable>Position:</lable>
                <input type="text" name="position" class="form-control">

                <lable>Overall:</lable>
                <input type="text" name="overall" class="form-control">

                <lable>Potential:</lable>
                <input type="text" name="potential" class="form-control">

                <lable>Club:</lable>
                <input type="text" name="club" class="form-control">

                <lable>Contract Length:</lable>
                <input type="text" name="contract" class="form-control">

                <lable>Current Value(in Millions):</lable>
                <input type="text" name="value" class="form-control">

                <lable>Wage(in K):</lable>
                <input type="text" name="wage" class="form-control"><br>

                <button class="btn btn-primary btn-block" type="submit" name="done">Update</button>
            </div>
        </form>
    </div>
</body>

</html>