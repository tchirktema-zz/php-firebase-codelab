<?php
include("includes/db.php");


if(isset($_POST['signup'])){

    $email = $_POST['emailSignup'];
    $pass = $_POST['passSignup'];

    $auth = $factory->createAuth();
    $user = $auth->createUserWithEmailAndPassword($email,$pass);
    header("Location:index.php");
}
else{

    $email = $_POST['emailSignin'];
    $pass = $_POST['passSignin'];

    $auth = $factory->createAuth();
    $user = $auth->signInWithEmailAndPassword($email,$pass);
    if($user){
        session_start();
        $_SESSION['user'] = true;
        header("Location:home.php");
    }
}

?>
