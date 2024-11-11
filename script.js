
//bottom-to-top Btn =================================
const goToTopBtn = document.getElementById("goToTopBtn");

goToTopBtn.onclick = () =>
{
    window.scrollTo(
        {
            top:0,behavior:"smooth"
        }
    );
}


//onclickBtns =============================
function goToLogin()
{
    window.location.href="auth/login_form.php"
}

function goToSignUp()
{
    window.location.href="auth/Register_form.php"
}

function authGoToLogin()
{
    window.location.href="login_form.php"
}

function authGoToSignUp()
{
    window.location.href="register_form.php"
}
