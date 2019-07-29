<?php



if(isset($_GET['submit']))
{

    if(isset($_GET['username'])){
    if($_SERVER["REQUEST_METHOD"] == "GET"){

        echo $_GET["username"];
    }
}

if(isset($_GET['gender'])){

if($_SERVER["REQUEST_METHOD"] == "GET"){

    echo $_GET["gender"];
}

}

}


?>