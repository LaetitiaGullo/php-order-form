<?php

require_once "validate-input.php";
require_once "products.php";

date_default_timezone_set('Europe/Paris');
// $current_hour = strftime("%H:%M");
// echo $current_hour . "</br>";
$express_delivery = date("H:i", strtotime("+30 minutes"));
$normal_delivery = date("H:i", strtotime("+60 minutes"));

if (isset($_POST["products"]) && $_SESSION["email"] && $_SESSION["street"] && $_SESSION["streetnumber"] && $_SESSION["city"] && $_SESSION["zipcode"] && $_SESSION["email"] != ""): ?>

    <div class ="alert alert-success" role="alert">
        <h5>Your information :</h5>
        <ul>
            <li><strong>Email</strong> : <?= $_SESSION['email'] ?></li>
            <li><strong>Street</strong> : <?= $_SESSION['street'] ?></li>
            <li><strong>Streetnumber</strong> : <?= $_SESSION['streetnumber'] ?></li>
            <li><strong>City</strong> : <?= $_SESSION['city'] ?></li>
            <li><strong>Zipcode</strong> : <?= $_SESSION['zipcode'] ?></li>
        </ul>
        <h5>Your order :</h5>
        <ul>
            <li></li>
        </ul>
        <h5>Expected delivery time :</h5>
        <ul>
            <li>
                <?php
                if (isset($_POST["express_delivery"])) {
                    $totalValue += 5;
                    echo "Express : 30minutes ($express_delivery)";
                } else {
                    echo "Normal : 1hour ($normal_delivery)";
                }
                ?>
            </li>
        </ul>
        <h5>Total price :</h5>
        <ul>
            <li>
                <?= $totalValue . "€"; ?>
            </li>
        </ul>
    </div>

<?php endif ?>