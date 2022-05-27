<?php
require('stripe-php-master/init.php');
include 'myhospital/hms/include/config.php';
$fee=$_POST['fees'];
$selectdoc="SELECT * FROM `appointment` WHERE `consultancyFees`= '$fee'";
$selectdocResult=mysqli_query($con,$selectdoc);
$Row=mysqli_fetch_array($selectdocResult);
$docId=$Row['consultancyFees'];
$payAmount = $docId*100;

$publishableKey ="pk_test_51K401tSHzMF7CVtrNXDscM4ATbv3pwfjAeSnaM4UQ12xlePa7LerJR7pjAX3yQ5uqg4Fj0Fz3RVwO8Ar2w7xLVJv00ai6l0O02";
$secretKey ="sk_test_51K401tSHzMF7CVtr1CIVJtMLEsswu6vWpaXX7YLm54gwIjrilAoi0Na2c66pRHHvZIrE0lfVaPtSc7xDqODAjGyE006Spkzk7t";
\Stripe\Stripe::setApiKey($secretKey);
