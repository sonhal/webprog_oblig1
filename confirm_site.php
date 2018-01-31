<?php
include("model.php");

if (isset($_POST["submit"])) {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenr = $_POST["phonenr"];
    $ticket_type = $_POST["ticket_type"];
    $ticket_count = $_POST["ticket_count"];


    $customer = new Customer($firstname,$phonenr,"test");
    $order = new Order($ticket_type, $ticket_count, $customer);
}

function is_valid_ticket_data($ticket_type, $ticket_count){
    $valid_ticket_types = array("o","st","ss","hs");

    foreach ($valid_ticket_types as $type){
        if($type === $ticket_type){
            if ($ticket_count <= 20 and $ticket_count > 0) return true;
        }
    }
}

?>


<!DOCTYPE html>
<html>

<?php
/**
 * Created by PhpStorm.
 * User: son
 * Date: 31.01.18
 * Time: 23:02
 */


include("header.php");
?>
<body>

<h1>Ticket Order</h1>

<table>

<?php
echo "<tr> <td>Name:</td> <td>". $customer->getName()."</td>";
echo "<tr> <td>Phone nr:</td> <td>". $customer->getPhonenr()."</td>";
echo "<tr> <td>Email:</td> <td>". $customer->getEmail()."</td>";
echo "<tr> <td>Ticket type:</td> <td>". $order->getTicket_type()."</td>";
echo "<tr> <td>Ticket count:</td> <td>". $order->getTicket_count()."</td>"
?>
</table>
<form action="complete_order.php" method="post">
    <input type="submit" value="Confirm" name="submit">
</form>

</body>

</html>
