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
        <div class="binary-login">

            <div>
                <h1>Zeiru</h1>
                <h2>Flower Shop</h2>
                <p>Log in to explore our beautiful blooms and special offers!</p>
            </div>
        </div>
    
        <div class="binary-login2">
            <form action="">
                <i class="fas fa-user-circle"></i>

                <div class="div-cont-form">
                    <p>
                        Email: <br>
                        <input type="text">
                    </p>
                </div>

                <div class="div-cont-form">
                    <p>
                        Password: <br>
                        <input type="password">
                    </p>
                </div>

                <div class="div-cont-form text-r">
                    <a href="3">Forgot password?</a>
                </div>

                <div class="div-cont-form">
                    <button type="submit">Login</button>
                </div>

                <div class="div-cont-form text-center" style="margin-top: 30px;">
                    <p>
                        Don't have an account yet? 
                        <a href="register_form.php">Sign-Up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
</div>

<?php require "../components/footer.php" ?>


</body>
</html>