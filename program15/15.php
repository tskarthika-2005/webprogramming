<!DOCTYPE html>

<html> <head> <title>Registration Form</title>

<style>
    div {
        width: 250px;
        margin: auto;
        margin-top: 20px;
    }

    h2 {
        text-align: center;
    }
</style>


</head>

<body>

<h2>Registration Form</h2>

<div> <form method="POST" action="">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br><br>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" id="mobile"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" value="Register" id="register">

</form>


</div>
<center>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { if (empty($_POST["name"])) { echo "<script>alert('Name is required')</script>"; } else if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) { echo "<script>alert('Enter your name correctly')</script>"; } else if (empty($_POST["email"])) { echo "<script>alert('Email is required')</script>"; } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { echo "<script>alert('Email is not in correct format')</script>"; } else if (empty($_POST["password"])) { echo "<script>alert('Password is required')</script>"; } else if (strlen($_POST["password"]) < 8) { echo "<script>alert('Password must be at least 8 characters')</script>"; } else if (!preg_match("/^[a-zA-Z]+@[0-9]*$/", $_POST["password"])) { echo "<script>alert('Password is not in correct format')</script>"; } else { echo "<h3>Form submitted successfully</h3>"; echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST["name"]) . "</p>"; echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>"; echo "<p><strong>Mobile:</strong> " . htmlspecialchars($_POST["mobile"]) . "</p>"; } } ?>
</center>
</body> </html>
