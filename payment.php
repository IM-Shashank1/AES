<?php include 'card_details.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Payment</title>
</head>

<body>
    <div class="container">
        <h1>Card Details</h1>
        <form action="payment.php" method="post">
            <div class="form-group">
                <label for="card_holder_name">Name on Card</label>
                <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" placeholder="Card Holder's Name">
            </div>
            <div class="form-group">
                <label for="card_number">Card Number</label>
                <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Debit/Credit Card Number">
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="card_expiry">Expiration Month</label>
                        <input type="text" class="form-control" id="card_expiry" name="card_expiry" placeholder="MM/YYYY">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="card_cvv">CVC</label>
                        <input type="text" class="form-control" id="card_cvv" name="card_cvv" placeholder="CVV">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit Payment</button>
            <button type="button" class="btn btn-danger"><a href='home.php'>Cancel</a> </button>

    </div>

    <style>
        a {
            text-decoration: none;
            color: white;
        }

        button a:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</body>

</html>