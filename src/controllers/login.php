<?php 
require_once('../configs/connect.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query="select * from users where username= '".$username."' and password='".$password."'";
    $result = mysqli_query(OpenCon(),$query);
    if($result){
        if(mysqli_fetch_assoc($result)){
            header("location: ../views/admin/welcome.php");
        }
    }else{
        echo $query;
    }
}
?>
