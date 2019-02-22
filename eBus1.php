<!--Creating a session variable and assigning it to txtTotal-->
<?php
session_start() = "";
$totalValue ="";
S_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http.//www3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="eBus3.php">
                <h1>Shop Calculator</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Beverage</b></td>
                        </tr>
                        <tr>
                            <td>CocaCola</td>
                            <td><input type="radio" id="CocaCola" name="rdoGroup" value="1" /></td>
                        </tr>
                        <tr>
                            <td>Sprite</td>
                            <td><input type="radio" id="Sprite" name="rdoGroup" value="5" /></td>
                        </tr>
                        <tr>
                            <td>CocaCola</td>
                            <td><input type="radio" id="CocaCola" name="rdoGroup" value="30" /></td>
                        </tr>
                    </table>   
                </center>
                <br />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Amount</b></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td>Discount @30%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>+VAT @40%</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                    </table>
                </center>
                
            <br />
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>   
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="Proceed()" value="Proceed"/>
                </center>
            </form>
        </div>
        
        <script type="text/jaavscript">
         function calcsub() {
             //Assigning variables to the values
             var subAmount = parseFloat(document.getElementById('txtSubTot').value);
             var CocaCola = parseFloat(document.getElementById('CocaCola').value);
             var Sprite = parseFloat(document.getElementById('Sprite').value);
             var Fanta = parseFloat(document.getElementById('Fanta').value);
             
             //If radio buttons are clicked, values are assigned
             if (document.getElementById('CocaCola').checked) {
                 document.intCalc.txtSubTot.value = CocaCola;
                 subAmount = CocaCola;
                 calculation(subAmount);
             }
             elseif (document.getElementById('Sprite').checked) {
                 document.intCalc.txtSubTot.value = Sprite;
                 subAmount = Sprite;
                 calculation(subAmount);
             }
             elseif (document.getElementById('Fanta').checked) {
                 document.intCalc.txtSubTot.value = Fanta;
                 subAmount = Fanta;
                 calculation(subAmount);
             }
         }  
         
         //Function for calculating the values
         function calculation(parmSTotal) {
             var subTotal = parseFloat(parmSTotal);
             var discCalc = parseFloat(subTotal * .30);
             var vatCalc = parseFloat(subTotal * .40);
             var total = parseFloat(subTotal - discCalc + vatCalc);
             
         //Inserting them into the correct fields
         document.intCalc.txtDisc.value = discCalc;
         document.intCalc.txtVat.value = vatCalc;
         document.intCalc.txtTotal.value = total;
         }
         
         function AmountClear(){
             document.getElementById("txtSubTot").value="";
             document.getElementById("txtDisc").value="";
             document.getElementById("txtVat").value="";
             document.getElementById("txtTotal").value="";
              }
        </script>
</body>
</html>



