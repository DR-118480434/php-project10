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
<?php
session_start();
$fullNameVal = "";
$totalValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameVal;
$_SESSION['txtTotal'] = $totalVal2;
$_SEESION['txtNum'] = $NumberVal;
/*
 * Allocate the mobile number seesion variable to a textbox
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        
    </head>
    <body>
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
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value=""></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""></td>
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



