<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fun</title>
    <link rel="stylesheet" href="bootstrap.css">
    
<style>
    body{ background-image: url(assets/images/use.jpg);
        background-size: cover;
        background-attachment: fixed;}
    .btn {
              display: inline-block;
              font-weight: 400;
              text-align: center;
              white-space: nowrap;
              vertical-align: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              border: 1px solid transparent;
              padding: 0.375rem 0.75rem;
              font-size: 1rem;
              line-height: 1.5;
              border-radius: 0.25rem;
              transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
        .btn-success {
              color: #fff;
              background-color: #28a745;
              border-color: #28a745;
            }

            .btn-success:hover {
              color: #fff;
              background-color:#d75a5a;
              border-color: #d75a5a;
            }
          
</style>
</head>
<body class="container">
   
    <form class="">
       
        <br/>
        
        <h3><p class="text-primary">Qstn1:</p></h3>
        <h5>How much you rate cristiano on a scale of 0-10?</h5>
        <select class="text-dark dropdown">
        <option value="o0">0</option>
        <option value="o1">1</option>
        <option value="o2">2</option>
        <option value="o3">3</option>
        <option value="o4">4</option>
        <option value="o5">5</option>
        <option value="o6">6</option>
        <option value="o7">7</option>
        <option value="o8">8</option>
        <option value="o9">9</option>
        <option value="o10">10</option>
            
        </select>
        <br>
        <h3><p class="text-primary">Qstn2:</p></h3>
        <h4><p>What are the positions ronaldo can play in?</p></h4>
        <br/>
        <div class="h5 text-success" style="color: orange;">
        <input type="checkbox"/>ST
        <br/>
        
        <input type="checkbox"/>LM
        <br/>
        
        <input type="checkbox" />RM
        <br/>
        
        <input type="checkbox" />CAM
        <br/>
        
        <input type="checkbox" />CDM
        <br/>
        
        <input type="checkbox" />CB
        <br/>
        
        <input type="checkbox" />GK
        <br/>
        </div>
    </form>
     <p class="h5 text-white">PLEASE !! Do Leave your Review about this page !!!</p>  
     <form method="post" class="a text-white form-row"><br>
        <br><textarea cols="40" rows="3" name="ta"></textarea>
        <br><input type="submit" class="btn btn-success" name="done" value="Comment">
    </form>
    <?php
            include 'conn.php';
            if(isset($_POST['done']))
            {
                $tcom = $_POST['ta'];
                $q= "insert into comment values('$tcom')";
                $query=mysqli_query($con,$q);
                if($query)
                {
                    echo "<h6><font color='white'>Comment Added.<a href='index.html'>Click Here To HOME</a></font></h6>";
                }
            }
        ?>
    
    <br/>
    <br/>
    <br/>
</body>
</html>