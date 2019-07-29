<?php

session_start();
if(isset($_POST['username'])){

    if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

}

$connection = mysqli_connect('localhost' , 'root' ,'', 'cu_watch');

            try{

                if($connection){
                    ///echo "connected to database!";
                  

                    $query = "SELECT * FROM cu_watch2 WHERE fullname='$username' and password='$password' ";

                    $run_query  = mysqli_query($connection,$query);

                    if($run_query){
                        
                        $result = mysqli_num_rows($run_query);
                        //$result = mysqli_fetch_row($run_query);

                        if($result > 0){
                           
                            $_SESSION['user_cur'] = $username;
                            $_SESSION['pass'] = true;
                            echo "<h1 style='color:blue; text-align:center;' ><i>Welcome " ;
                            echo $_SESSION['user_cur']."!";
                            echo "</i></h1>";
                        } ///

                        else{
                            
                            include ('login.html');
                            echo "<br>";
                            echo "<b><i><div style='color:red; text-align: center; font-size:30px;'>Invalid Username or password!</div></i></b>";
                            $_SESSION['pass'] = false;
                        }
                    }
                    else {
                         echo "<div style='color:red; text-align: center; font-size:30px'>Connection to Server Error!</div>";
                    }
                   
                } ////
                        
                
            } ///

            catch(Exception $error){
                echo $error->get_message();
            }


        }

        
?>

<!DOCTYPE html>

<html >

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
<title>User Portal</title>

<link href="css/style.css" type="text/css" rel="stylesheet">

<body style="background:silver;" >

<?php

if($_SESSION['pass']) {
echo '

<div>
<a href="index.html"><button>HOMPAGE</button>
</a>

<a href="login.html"><button>logout</button>
</a>

</div>

<br>
';
}
?>
 
    <form  method="post" action='check.php'>

    <?php
if($_SESSION['pass'] ){
    $password = '';
echo '<br>';
echo '<div class="userpage" style="color:red;">logged in as : ';
echo $_SESSION['user_cur'];
echo '!</div><br>';

echo '
<div style="color:purple; text-align:center;">
<br>
<b>Send Messages to:<b>
<br>
<br>
</div>

';

$connection = mysqli_connect('localhost' , 'root', '', 'cu_watch');


try{

    if($connection){
      
        $query = "SELECT * FROM cu_watch2";
        

        $run_query = mysqli_query($connection,$query);

        if($run_query){

            
            $datas = mysqli_fetch_assoc($run_query);
            
          $num_d = 0;
            
          while ($datas['fullname']){
     ////
            if($datas["fullname"] !=$_SESSION['user_cur'] ){
                echo '
                    <div class="details">
            '.$datas["fullname"].'<input type="radio" name="ip" value='.$datas["ipaddress"].' required> </div>'
          ;
          echo '<br>';

                
            }  ///
             
            
            $datas = mysqli_fetch_assoc($run_query);
        }


            echo '
            <div style="text-align:center;">

          <button type="submit" value="submit"> check availablity </button>
        <br>
        </div>
        </form >

        ';
        }

        else{
            echo "error connecting to database!";
            echo"<br>";
        }
        mysqli_close($connection);
    }  ///


}
catch(Exception $error){
    echo $error->get_message();
}

///

}

    ?>


</body>
</html>
