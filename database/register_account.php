<?php

include "config.php";

$customer_id = null;
$customer_name = $_POST['customer_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$hashed_pass = password_hash($pass, PASSWORD_ARGON2I);

$sql = "INSERT INTO customer_account_tbl values(?,?,?,?,?)";
$qry = $conn->prepare($sql);
$qry->bind_param("sssss", $customer_id, $customer_name, $gender, $email, $hashed_pass);

if($qry->execute())
{
    echo 
    "<script>
        window.location.href='../auth/login_form.php';
        alert('Account Created Susscessfully!');
    </script>";
}

else
{
    echo
    "<script>
        alert('Failed to Create account'); 
    </script>";
}
?>