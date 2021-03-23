<?php

require_once 'validate-input.php';
require_once 'products.php';

if($_SERVER["REQUEST_METHOD"] == "POST"):
    if(array_sum($_POST["products"]) == 0 || $email_err || $street_err || $streetnumber_err || $city_err || $zipcode_err) : ?>

    <div class="alert alert-danger" role="alert">
        <ul>
            <?= printError($email_err) ?>
            <?= printError($street_err) ?>
            <?= printError($streetnumber_err) ?>
            <?= printError($city_err) ?>
            <?= printError($zipcode_err) ?>
            <?php if(array_sum($_POST["products"]) == 0) : ?>
            <li>You didn't choose any product !</li>
            <?php endif ?>
        </ul>
    </div>

    <?php endif ?>
<?php endif ?>