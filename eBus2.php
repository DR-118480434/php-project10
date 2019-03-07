<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box
 */
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Personal Details</title>
        
    </head>
    <body>
        <style>
              body {
                background-image: url("Pattern2.png");
                background-repeat: repeat-x;
            }
        </style>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""></td>
                        </tr>
                        <tr>
                            <td>E-Mail</td>
                            <td><input type="email" id="txtNum" name="txtNum" value=""></td>
                        </tr>
                        <tr>
                            <td>PIN</td>
                            <td><input type="password" type="number" id="txtPassword" name="txtPassword" min="1" max="4" value=""></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                        
                    </table>
               </center>
                <center>
                  <input type="submit" name="btnContinue" onclick="" value="Continue" />  
                </center>
       </div>
     </form>
    </body>
</html>



