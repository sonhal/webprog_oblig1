<?php

session_start();

include("model.php");

?>
<!DOCTYPE html>
<html>

<?php
/**
 * Created by PhpStorm.
 * User: son
 * Date: 01.02.18
 * Time: 00:08
 */

include("header.php");
?>

<body>
<h1>Thank you for your Order</h1>
<table>
<?php
if (isset($_SESSION["order"])){
    $order = unserialize($_SESSION["order"]);

    $textBuilder = new ObjectToTextTransformer();

    $customer  = $order->getCustomer();
    if($order->saveToFile()){
        echo $textBuilder->createTableRowFromArray(array("Order status:", "Saved"));
        $result = mail($customer->getEmail(), "Ticket order confirmation", "Your order has been registered!");
        if($result){
            echo $textBuilder->createTableRowFromArray(array("Email status:","Email sent"));
        }
        else{
            echo $textBuilder->createTableRowFromArray(array("Email status:","ERROR: Email could not be sent"));
        }
    }
    else {
        echo $textBuilder->createTableRowFromArray(array("Order status:","ERROR: Order could not be registered"));
    }
}
else {
    header("location: index.php");
}


?>
</table>
</body>
</html>
