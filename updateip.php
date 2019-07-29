<?php


if(isset($_GET['ip'])){

    if($_SERVER["REQUEST_METHOD"] == "GET"){

        $connection = mysqli_connect("localhost" , "root" , "" , "cu_watch");

        try{
                if($connection){

                    $ip =  $_GET['ip'];
                    $id = $_GET['username'];

                    $query = "UPDATE cu_watch2 SET ipaddress = '$ip' WHERE id = '$id' ";

                    $run_query = mysqli_query($connection,$query);

                    if($run_query){
                        echo 'sent';
                    }

                    else{
                        echo 'error';
                    }

                }
        }
        catch(Exception $error){
            echo $error->get_message();
        }

    }
}///


?>