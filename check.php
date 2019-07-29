<!DOCTYPE html>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>

<body>
<div>

<a href="index.html"><button>HOMPAGE</button>
</a>

<a href="userpage.php"><button>Go Back</button>
</a>

    </div>
</body>
</html>

<?php



if(isset($_POST['ip'])){

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        ///echo $_POST['ip'];
       $_SESSION['ipad'] =  $_POST['ip'] ;
    }
}



?>

<?php



if($_SESSION['ipad'] !='NULL'){

    $nam = "http://".$_SESSION["ipad"].":334";
        
    ///echo 
 echo "

 
 $nam

<form action=$nam method='post'>

<textarea name='message' row=5 col=5 placeholder='Type your messages here..'></textarea>


  
<input type='submit' value='SEND'>
<br>

</form>

";

}

else{
    echo '<b><div style="color:red; text-align: center; font-size:30px">Sorry the user is currently offline!</div></b>';
}
?>