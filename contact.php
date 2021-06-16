<?php 

    if(isset($_POST['btn-send']))
    {
       $YourName = $_POST['UName'];
       $YourEmail = $_POST['Email'];
       $YourPh_no = $_POST['Ph_no'];
       

       if(empty($YourName) || empty($Email) || empty($YourPh_no))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "alfaaviationacdmy@gmail.com";

           if(mail($to,$Subject,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>

