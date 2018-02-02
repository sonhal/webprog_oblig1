


<!DOCTYPE html>
<html>
<?php
session_start();

if (isset($_SESSION["order"])){
    unset($_SESSION["order"]);
}
/**
 * Created by PhpStorm.
 * User: son
 * Date: 31.01.18
 * Time: 20:51
 */
include ("header.php");
?>
<body>
<?php
include("ticket_form.php");

?>


</body>
</html>
