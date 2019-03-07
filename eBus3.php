<!DOCTYPE html>
<html>
    <head>
         
    </head>
<body>
    <!-- //Starting the session to get the session variable from the last page-->
    <div>
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
    </div>
</body>
</html>

