<?php

include 'conn.php';
if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $position=$_POST['position'];
    $overall=$_POST['overall'];
    $potential=$_POST['potential'];
    $club=$_POST['club'];
    $contract=$_POST['contract'];
    $value=$_POST['value'];
    $wage=$_POST['wage'];
    
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insert</title>
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
            font-size: 18px;
            font-style: oblique;
        }
    </style>
</head>

<body>
    <div class="col-md-5 m-auto">
        <form method="post" action="">
           <div class="fixed-top">
                <a class="btn btn-sm btn-danger display-4" href="http://localhost/fbproject/first.html">DataBase Operation</a>
            </div>
            <br><br>
            <div class="form-container color-container">
              <div class="card-header">  <?php
                error_reporting(0);
                if($name!="" && $position!="" && $overall!="" && $potential!="" && $club!="" && $contract!="" && $value!="" && $wage!="")
                    {
                        $q="INSERT INTO `pdnew`(`Name`, `Position`, `Overall`, `Potential`, `Club`, `Contract_lenght`, `Current_value(in M)`, `Wage(in K)`) VALUES ('$name','$position','$overall','$potential','$club','$contract','$value','$wage')";
                        $query = mysqli_query($con,$q);
                        if($query)
                            echo "<font color='white'>Data Inserted Successfully. <a href='dispnew.php'>Check Inserted List Here</a></font>";
                    }
                    else
                    {
                        echo "<font color='white'>All fields are required</font>";
                    }
                ?></div>
                <div class="card-header">
                    <h1 class="text-success text-center">INSERT Operation</h1>
                </div>
                
                <lable >Name:</lable>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">

                <lable>Position:</lable>
                <input type="text" name="position" class="form-control" placeholder="Enter Position">

                <lable>Overall:</lable>
                <input type="text" name="overall" class="form-control" placeholder="Enter Overall">

                <lable>Potential:</lable>
                <input type="text" name="potential" class="form-control" placeholder="Enter Potential">

                <lable>Club:</lable>
                <input type="text" name="club" class="form-control" placeholder="Enter Club">

                <lable>Contract Length:</lable>
                <input type="text" name="contract" class="form-control" placeholder="Enter Contract Length">

                <lable>Current Value(in Millions):</lable>
                <input type="text" name="value" class="form-control" placeholder="Enter Current Value">

                <lable>Wage(in K):</lable>
                <input type="text" name="wage" class="form-control" placeholder="Enter Wage"><br>

                <button class="btn btn-success btn-block" type="submit" name="done">Insert</button>
            </div>
        </form>
    </div>
</body>

</html>