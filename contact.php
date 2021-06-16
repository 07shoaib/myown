<?php 

    if(isset($_POST['send']))
    {
       $YourName = $_POST['UName'];
       $YourEmail = $_POST['Email'];
       $YourPh_no = $_POST['Ph_no'];
       

       if(empty($YourName) || empty($Email) || empty($YourPh_no))
       {
           header('location:index.html?error');
       }
       else
       {
           $to = "alfaaviationacdmy@gmail.com";

           if(mail($to,$Subject,$Email))
           {
               header("location:index.html?success");
           }
       }
    }
    else
    {
        header("location:index.html");
    }
?>

<?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>-->
