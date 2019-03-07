<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
<body>
    <style>
            h1 {
                color: purple
            }
            php {
                text-align: center
            }
            a {
                color: blue
            }
            div {
                text-align: center
            }
    </style>
    <!-- //Starting the session to get the session variable from the last page-->
    <div>
        <h1 style="text-align: center">Roche C.S.</h1>
        <br></br>
        <h2>Receipt</h1>
        </hr>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameVal = $_POST['txtName'];
        $NumberVal = $_POST['txtNum'];
        echo "The name is: ".$fullNameVal.".";
        echo "<br></br>";
        echo "The phone number is: ".$NumberVal.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
    ?>
        <br></br>
        <a href="eBusiness.html" target="_blank">Back to HomePage</a>
    </div>
    
</body>
</html>

