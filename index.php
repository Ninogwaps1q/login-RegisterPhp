<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login & Register</title>
</head>
<body>

<div class="container" id="signUp">
    <h1 class="title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" placeholder="First Name" required>
            <label>First Name</label>
        </div>

        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" placeholder="Last Name" required>
            <label>Last Name</label>
        </div>

        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
            <label>Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            <label>Password</label>
        </div>

        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>

    <div class="links">
        <p>Already have an account?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>

<div class="container" id="signIn" style="display:none;">
    <h1 class="title">Sign In</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
            <label>Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            <label>Password</label>
        </div>

        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>

    <div class="links">
        <p>Don't have an account?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>

<script src="scripts.js"></script>
</body>
</html>
