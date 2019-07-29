<a href="index.html"><input type="button" value="HOMEPAGE">
</a>
<br>
<?php

if(isset($_POST['username'])){

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $Department = $_POST['Department'];

        
        $connection = mysqli_connect('localhost' , 'root' ,'', 'cu_watch');


        try{

            if($connection){
                //echo "connected to database!";
                ///echo"<br>";

                $query_raw = "SELECT * FROM cu_watch2 WHERE fullname='$username' and password='$password' ";
                $query_raw2 = "SELECT * FROM cu_watch2 WHERE fullname='$username'";
                $run_query  = mysqli_query($connection,$query_raw);
                $run_query2  = mysqli_query($connection,$query_raw2);
                $result = mysqli_num_rows($run_query);
                $result2 = mysqli_num_rows($run_query2);

                if($result>0){

                    echo "<br>";
                       
                    echo "<b style='color:red'>User Account already exists!</b>";
                }

                else if($result2>0){

                    echo "<br>";
                       
                    echo "<b style='color:red'>User name already exists choose another!</b>";
                }
                else
                        {
                $query = "INSERT INTO cu_watch2 (id,fullname , password ,Department ,ipaddress)
                VALUES ('$username' , '$username' , '$password','$Department','NULL')";
                           
                           $run_query  = mysqli_query($connection,$query);
                            

                           if($run_query){
                              
                            echo "<h1 style='color:blue'><i>ACCOUT CREATED!<br>Welcome " ;
                            echo $username."!";
                            echo "</i></h1>";

                               $_SESSION['user_cur'] = $username;

                                
                               include('userpage.php');
                           }

                           else{
                            echo "ERROR";
                           }
                        }  ///

            } ////
                    
            mysqli_close($connection);
        } ///

        catch(Exception $error){
            echo $error->get_message();
        }
        
    }  ///
}



?>