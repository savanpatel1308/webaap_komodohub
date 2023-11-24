<?php
    // Your form submission handling
    if (isset($_POST['submit'])) {
        include "connection.php"; // Ensure this path is correct

        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        // Check if username or email already exist in the table 'users'
        $sql_username = "SELECT * FROM users WHERE username = '$username'";
        $result_username = mysqli_query($conn, $sql_username);
        
        if (!$result_username) {
            die("Query failed: " . mysqli_error($conn));
        }

        $count_user = mysqli_num_rows($result_username);

        $sql_email = "SELECT * FROM users WHERE email = '$email'";
        $result_email = mysqli_query($conn, $sql_email);
        
        if (!$result_email) {
            die("Query failed: " . mysqli_error($conn));
        }

        $count_email = mysqli_num_rows($result_email);

        if ($count_user == 0 && $count_email == 0) {
            if ($password == $cpassword) {
                // Hash the password before storing it in the database
                $hash = password_hash($password, PASSWORD_DEFAULT);
                
                // Insert user data into the table
                $sql_insert = "insert into users (username, email, password) VALUES ('$username', '$email', '$hash')";
                $result_insert = mysqli_query($conn, $sql_insert);

                if ($result_insert) {
                    echo '<script>
                    alert("Registration successful!");
                    window.location.href = "index.php";
                    </script>';
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo '<script>
                alert("Passwords do not match");
                window.location.href = "signup.php";
                </script>';
            }
        } else {
            echo '<script>
            alert("User already exists!!!");
            window.location.href = "index.php";
            </script>';
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div id="form">
        <h1 id="heading">SignUp</h1><br>
        <form name="form" action="signup.php" method="POST">
            <label>Enter Username: </label>
            <input type="text" id="user" name="user" required><br><br>
            <label>Enter Email: </label>
            <input type="email" id="email" name="email" required><br><br>
            <label>Create Password: </label>
            <input type="password" id="pass" name="pass" required><br><br>
            <label>Retype Password: </label>
            <input type="password" id="cpass" name="cpass" required><br><br>
            <input type="submit" id="btn" value="SignUp" name = "submit"/>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
