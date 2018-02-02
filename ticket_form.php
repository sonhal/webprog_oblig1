<?php
/**
 * Created by PhpStorm.
 * User: son
 * Date: 31.01.18
 * Time: 21:06
 */

?>

<form action="confirm_site.php" method="post">
    First name:<br>
    <input type="text" name="firstname"><br>
    Last name:<br>
    <input type="text" name="lastname"><br>
    Email:<br>
    <input type="text" name="email"><br>
    Phone nr:<br>
    <input type="tel" name="phonenr"><br><br>
    <select name="ticket_type">
        <option value="Ordinary">Ordinary</option>
        <option value="Seat with table">Seat with table</option>
        <option value="Sofa seat">Sofa seat</option>
        <option value="Handicap seat<">Handicap seat</option>
    </select><br>

    <select name="ticket_count">
        <?php
        for($i = 1; $i <= 20; $i++){
            echo "<option value='".$i."'>".$i."</option>";
        }
        ?>

        ?>
    </select><br><br>

    <input type="submit" value="Order" name="submit">
</form>

