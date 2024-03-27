<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'signup.css'; ?></style> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Authentication Page</title>
</head>
<body>
    <section>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>MK Marketing</p>
            
        </div>
       
        <p id="home"><a href="index.php">Home</a></p>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
            <div class="top">
                <header>Login</header>
            </div>
            <form class="needs-validation" id = "loginForm" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="user" class="form-control" name = "lInput" id="lInput" placeholder="name@example.com" required>
                <label for="lInput"><i class="bi bi-person"> Email address</i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name = "lPassword" id="lPassword" placeholder="Password" required>
                <label for="lPassword"><i class="bi bi-key"> Password</i></label>
            </div>
            <div class="form-floating gap-2">
                <button class="btn btn-primary" type="submit">Sign In</button>
            </div>
            </form>
            <div id="errorMessage"  style="display: none;"></div>
            
                <span>Don't have an account? <a href="#" onclick= "register()">Sign Up</a></span>
        </div>
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <header>Sign Up</header>
            </div>
            <form class="needs-validation" id = "registerForm" method="post" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="form-floating col">
                <input type="user" class="form-control" name = "rName" id="rName" placeholder="John" required>
                <label for="rName"> First Name</label>
                </div>
                <div class="form-floating col">
                <input type="user" class="form-control" name = "rLName" id="rLName" placeholder="Doe" required>
                <label for="rLName"> Last Name</label>
                </div>
                <div class="form-floating gap-2">
                    <input type="user" class="form-control" id="rUser" placeholder="username">
                    <label for="rUser" class="form-label"><i class="bi bi-person"> Username</i></label>
                </div>
                <div class="form-floating gap-2">
                    <input type="email" class="form-control" name = "rEmail" id="rEmail" placeholder="name@example.com">
                    <label for="rEmail" class="form-label"><i class="bi bi-envelope"> Email</i></label>
                </div>
                <div class="form-floating gap-2">
                    <input type="password" class="form-control" name = "rPassword" id="rPassword" placeholder="Password">
                    <label for="rPassword" class="form-label"><i class="bi bi-lock"> Password</i></label>
                </div>
                <div class="form-floating gap-2">
                <button class="btn btn-primary" type="submit"> Register</button>
            </div>
        </div>
    </form>
            <div id="rErrorMessage"  style="display: none;"></div>
        </div>   
    </section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="signup.js"></script>
<script><?php include 'signup.js'; ?></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> 
</body>
</html>