<?php
//CHECK IF THE BUTTON HAS BEING CLICKED
if (isset($_POST['btn_submit'])){
    require 'connect.php';

    //START RECEIVING DATA FROM THE USER
    $name=mysqli_escape_string($conn,$_POST['user']);
    $Email=mysqli_escape_string($conn,$_POST['email']);
    $Phone_number=mysqli_escape_string($conn,$_POST['number']);

    //PREPARE THE INSERT QUERY
    $save_query="INSERT INTO `usertable`(`userid`, `Name`, `Email`, `Phone_Number`) VALUES (NULL,'$name','$Email','$Phone_number')";

    //FINALLY SAVE USING THE MYSQLI_QUERY
    $save=mysqli_query($conn,$save_query);

    //CHECK IF THE SAVING WAS SUCCESSFUL
    if ($save){
        //ECHO SAVED SUCCESSFULLY
        header("location:register.php");
    }else{
        die("Saving Failed");
    }



}

