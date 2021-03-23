<?php

require_once 'validate-input.php';


if($email_err || $street_err || $streetnumber_err || $city_err || $zipcode_err) : ?>

<div class="alert alert-danger" role="alert">
    <ul>
        <?= printError($email_err) ?>
        <?= printError($street_err) ?>
        <?= printError($streetnumber_err) ?>
        <?= printError($city_err) ?>
        <?= printError($zipcode_err) ?>
    </ul>
</div>

<?php endif ?>