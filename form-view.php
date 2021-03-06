<?php // This files is mostly containing things for your view / html ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <title>SubLime</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-2 navbar-dark bg-dark shadow-sm mb-3 sticky-top">
        <div class="container brandHeader">
            <a href="#" class="navbar-brand logobar">
                <!-- Logo Image -->
                <img src="https://www.flaticon.com/svg/static/icons/svg/2060/2060579.svg" width="60" alt=""
                    class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class=" font-weight-bold sublime ml-3">SubLime</span>
            </a>
            <span class="sloganTitle font-weight-bold font-italic">Buy your Suboptimal and Subpar limes here!</span>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>


        </div>
    </nav>
    <div class="container">
        <h1>Place your order</h1>
        <?php // Navigation for when you need it ?>
        <?php /*
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    */ ?>



        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" placeholder="FunnyGuy@gmail.com ..."
                        class="form-control" />
                </div>
                <div></div>
            </div>

            <fieldset>
                <legend>Address</legend>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="street">Street:</label>
                        <input type="text" name="street" placeholder="Sesamestreet ..." id="street"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="streetnumber">Street number:</label>
                        <input type="text" id="streetnumber" name="streetnumber" placeholder="14 ..."
                            class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" placeholder="Lazytown ..." class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" id="zipcode" name="zipcode" placeholder="1500 ..." class="form-control">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Products</legend>
                <?php foreach ($products as $i => $product): ?>
                <label>
                    <?php // <?p= is equal to <?php echo ?>
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]" /> <?php echo $product->name; ?>
                    -
                    &euro; <?= number_format($product->price, 2) ?></label><br />
                <?php endforeach; ?>
            </fieldset>

            <button type="submit" name="submit" class="btn btn-primary">Order!</button>
        </form>

        <footer class="mb-3">You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.
        </footer>
    </div>

    <style>
        footer {
            text-align: center;
        }
    </style>
</body>

</html>