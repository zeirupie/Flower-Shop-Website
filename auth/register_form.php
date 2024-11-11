<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeiru Flower Shop</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    
<?php require "../components/header.php" ?>


<div class="login-section">
    <div class="login-section-cont">
    
        <div class="binary-login2" style="width:100%;padding-top:80px">
            <form action="../database/register_account.php" method="POST">
                <i class="fas fa-user-circle"></i>

                <div class="div-cont-form">
                    <p>
                        Full name <br>
                        <input type="text" name="customer_name" required placeholder="example: Juan Dela Cruz">
                    </p>
                </div>

                <div class="div-cont-form">
                    <p class="register-radio">
                        Gender: <br>
                        <input type="radio"  name="gender" value="male" checked> Male 
                        <input type="radio" name="gender" value="female" style="margin-left:20px"> Female
                    </p>
                </div>

                <div class="div-cont-form">
                    <p>
                        Email <br>
                        <input type="email" name="email" required  placeholder="example:juandelacruz@gmail.com">
                    </p>
                </div>

                <div class="div-cont-form">
                    <p>
                        Password <br>
                        <input type="password" name="pass" required  placeholder="Enter password">
                    </p>
                </div>

                <div class="div-cont-form">
                    <p>
                        Confirm password <br>
                        <input type="password" placeholder="Confirm password">
                    </p>
                </div>

                <div class="div-cont-form" style="margin-top: 10px;">
                    <button type="submit">Sign-Up</button>
                </div>

                <div class="div-cont-form text-center" style="margin-top: 30px;">
                    <p>
                        Already have an accoount? 
                        <a href="login_form.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
</div>

<?php require "../components/footer.php" ?>

</body>
</html>