<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

    <link rel="stylesheet" href="Rstyle.css" />
    <title>Registration Form</title>
</head>

<body>
    
<div class="container" id="container">

            <div class="form-container sign-in-container">
                
                <form action="validation.php" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="container1">
                <span>or use your account</span>
                    <div class="form-group1">
                        
                        <input type="text" placeholder="Username" name="user" class="form-control" required>
                    </div>
                    <div class="form-group1">
                        
                        <input type="password"  placeholder="Password" name="password" class="form-control" required>
                    </div>
                    <a href="#">Forgot your password? </a>
                    <button type="submit" class="btn btn-primary">login</button>
                </div>
                </form>
            </div>

            <div class="form-container sign-up-container">
                
                <form action="reg.php" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="container2">
                    <div class="form-group1">
                        
                        <input type="text" placeholder="Name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group1">
                        
                        <input type="email" placeholder="Email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group1">
                        
                        <input type="text" placeholder="Username" name="user" class="form-control" required>
                    </div>
                    <div class="form-group1">
                        
                        <input type="password" placeholder="Password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">registar</button>
                </div>
                </form>
            </div>

            <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>

    <script src="main.js"></script>

        </div>
    </div>

</body>

</html>