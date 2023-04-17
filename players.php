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
                <a class="btn btn-sm btn-primary display-4" href="http://localhost/fbproject/index.html"><i class="fa fa-cog"></i>HOME</a>
            </div>
            <!--<form class="form-inline" action="" method="POST">
                       <div class="">
                           <input type="text" name="search1" class="form-control " placeholder="Search By Name" value="">
                       </div>
                       <div class="">
                           <button class="btn btn-primary">Search</button>
                       </div>
                   </form>-->

            <h1 class="text-success text-center text-md-center form-container text-uppercase h1">Top 10 Players</h1>
            <br>
            <table class="table table-striped table-hover table-borderless table-light form-container">
                <tr class="bg-dark text-white text-center form-container">
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Overall</th>
                    <th>Position</th>
                    <th>Club</th>
                </tr>
                <?php
                        include 'conn.php';
                        error_reporting(0);
                        $q = "SELECT * FROM `topp`";
                        $query = mysqli_query($con,$q);
                        while($res = mysqli_fetch_array($query))
                        {
                ?>

                <tr class="text-center">
                    <td><?php echo $res['name'];  ?></td>
                    <td><?php echo $res['nationality'];  ?></td>
                    <td><?php echo $res['overall'];  ?></td>
                    <td><?php echo $res['position'];  ?></td>
                    <td><?php echo $res['club'];  ?></td>
                </tr>
                <?php
                        }
                ?>
            </table>
        </div>
    </div>
</body>
</html>