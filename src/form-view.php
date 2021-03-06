<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Order Pizzas & drinks</title>
</head>
<body>

<div class="container">
    <h1>Order pizzas in restaurant "the Personal Pizza Processors"</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order pizzas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    <?php require 'order-confirm.php' ?>
    <?php require 'alert-box.php' ?>
    <form method="post" autocomplete="on">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email"><span class="required">* </span>E-mail :</label>
                <input type="text" id="email" name="email" class="form-control" value="<?= $_SESSION["email"] ?>">
                
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street"><span class="required">* </span>Street :</label>
                    <input type="text" name="street" id="street" class="form-control" value="<?= $_SESSION["street"] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber"><span class="required">* </span>Street number :</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control" value="<?= $_SESSION["streetnumber"] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city"><span class="required">* </span>City :</label>
                    <input type="text" id="city" name="city" class="form-control" value="<?= $_SESSION["city"] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode"><span class="required">* </span>Zipcode :</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?= $_SESSION["zipcode"] ?>">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products AS $i => $product): ?>
                <label>
                    <input type="number" value="0" min="0" id="products" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    <?php echo number_format($product['price'], 2) ?>&euro;</label><br />
            <?php endforeach; ?>
        </fieldset>
        
        <label>
            <input type="checkbox" name="express_delivery" value="5" /> 
            Express delivery (+ 5&euro;) 
        </label>
            
        <button type="submit" class="btn btn-primary">Order !</button>
    </form>

    <footer>You already ordered <strong><?php echo $totalValue ?>&euro;</strong> in pizza(s) and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }

    #products {
        width: 40px;
    }

    .required {
        color: red;
    }
</style>
</body>
</html>