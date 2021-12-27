<?php
// Report all PHP errors
error_reporting(0);

$card_holder_name = '';
$card_number = '';
$card_expiry = '';
$card_cvv = '';

// connect database connection named aes
$db = mysqli_connect('localhost', 'root', '', 'aes');



//function for encrypting using AES 256
function enc_dec($action, $string)
{
    $output = true;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'sadgjakgdkjafkj';
    $secret_iv = 'This is my secret iv';

    $key = hash('sha256', $secret_key);

    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

//get values from payment.php form
$card_holder_name = mysqli_real_escape_string($db, $_POST['card_holder_name']);
$card_number = mysqli_real_escape_string($db, $_POST['card_number']);
$card_expiry = mysqli_real_escape_string($db, $_POST['card_expiry']);
$card_cvv = mysqli_real_escape_string($db, $_POST['card_cvv']);

// if (strlen($card_number) != 0) {
//     $card_number1 = enc_dec('encrypt', $card_number);
// }

//call function enc_dec
$card_number1 = enc_dec('encrypt', $card_number);
$card_expiry1 = enc_dec('encrypt', $card_expiry);
$card_cvv1 = enc_dec('encrypt', $card_cvv);

// echo $card_number1 . "<br>";
// echo $card_expiry1 . "<br>";
// echo $card_cvv1 . "<br>";


//get values from card_details table to verify
$sql = "SELECT card_holder_name, card_number, card_expiry, card_cvv FROM card_details WHERE card_holder_name='$card_holder_name' AND card_number='$card_number1' AND card_expiry='$card_expiry1' AND card_cvv='$card_cvv1'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    header('location: complete_payment.php');
} else {
    echo "<script>alert('Invalid Card Details');</script>";
}

//insert into card_details table
// $sql = "INSERT INTO card_details (card_holder_name, card_number, card_expiry, card_cvv) VALUES ('$card_holder_name', '$card_number1', '$card_expiry', '$card_cvv')";
// $result = mysqli_query($db, $sql);
// if (mysqli_num_rows($result) > 0) {
//     header('location: payment.php');
// }
