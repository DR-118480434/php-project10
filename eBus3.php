<!DOCTYPE html>
<html>
<body>
        <!-- //Starting the session to get the session variable items from last page-->
        <?php
        
        session_start();
        $totalValue = $_POST('txtTotal');
        
        echo "the total value is ".$totalValue." ";
        ?>
</body>
</html>

