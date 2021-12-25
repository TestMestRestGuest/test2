<?php 

    if(isset($_POST['send-btn']))
    {
       $UserName = $_POST['Name'];
       $Email = $_POST['Sender'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['Message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           echo("Error");
       }
       else
       {
           $to = "nore64747@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               echo("Success!");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>  