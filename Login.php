<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF 8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device width, initial scale = 1.0">
        <title website with login and registration></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h2 class="logo">Resq.</h2>
            <nav class="navigation">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
                <button class="btnLogin-popup">Login</button>
            </nav>
        </header>

        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>

            <div class="form-box login">
                <h2>Login</h2>
                <form action="backend.php" method="post">
                    <select name = "user_type">
                        <option value="Director">Director</option>
                        <option value="Administtrator">Administrator</option>
                        <option value="Social_Worker">Social Worker</option>
                    </select>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">
                        Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                    </div>
                </form>  
            </div>
        </div>

            <script src="script.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </div>
    </body>
</html>