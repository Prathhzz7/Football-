<?php

include 'conn.php';
if(isset($_POST['done']))
{
    $name = $_GET['Name'];
    $Club = $_GET['Club'];
    $Name = $_POST['name'];
    $pos = $_POST['position'];
    $club = $_POST['club'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Transfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body {

            background-image: url(assets1/images/football_munich_allianz_arena_ball_soccer_81193_1600x900.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        .color-container{
            color: white;
            text-decoration-style: double;
            font-size: 18px;
            font-style: oblique;
        }
        .form-container{
            border: 0px solid; padding: 40px 40px;
            -webkit-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
    <div class="col-lg-5">
        <form method="post" action="" class="form-container color-container" >
            <br><br>
            <div class="form-container color-container">
              <div class="card-header">  
               <?php
                error_reporting(0);
                if($name!="" && $pos!="" &&  $club!="" )
                {
                    $q=" UPDATE `pdnew` SET Name ='$Name',`Position`='$pos',`Club`='$club' WHERE Name ='$name' ";
                    $query = mysqli_query($con,$q);
                    if($query)
                        echo "<font color='white'>Transfer Done Successfully. <a href='trans.php'>Check Transfered List Here</a></font>";

                }
                else
                {
                    echo "<font color='white'>All fields are required</font>";
                }

                    
                ?></div>
                <div class="card-header">
                    <h1 class="text-secondary text-center"><b>TRANSFER Operation</b></h1>
                </div>
                <div><br>
                <lable class="text-white">Name:</lable>
                <input type="text" name="name" class="form-control" value="<?php echo $_GET['Name']  ?>"><br>
                <lable class="text-white">Position:</lable>
                <input type="text" name="position" class="form-control"><br>
                <lable class="text-white">Club:</lable>
                <input type="text" name="club" class="form-control" value="<?php echo $_GET['Club']  ?>"></div>
                
                <!--<button class="btn btn-warning" type="submit" name="done">DO Transefer</button>-->
            </div><br>
            <button class="btn btn-secondary btn-block" type="submit" name="done">DO Transfer</button>
        </form>
    </div>
</body>

</html>