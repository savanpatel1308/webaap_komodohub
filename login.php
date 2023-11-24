<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
        exit(); // Ensure to stop script execution after header redirection
    }

    $login = false;
    include('connection.php');

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        $sql = "select * from users where username = '$username' OR email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        
        if (!$result) {
            die("Query failed: " . mysqli_error($conn)); // Display the specific MySQL error
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        
        if($row){  
            if(password_verify($password, $row["password"])){
                $login = true;
                $_SESSION['username'] = $row['username'];
                $_SESSION['loggedin'] = true;
                header("Location: welcome.php");
                exit(); // Ensure to stop script execution after header redirection
            }
        }  
        echo '<script>
                    alert("Login failed. Invalid username/email or password!!")
                    window.location.href = "login.php";
                </script>';
        exit(); // Ensure to stop script execution after redirection
    }
?>

<?php 
    include("connection.php");
    include("navbar.php");
    // Any other HTML content for the login page
?>

    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <br><br>
        <div id="form">
            <h1 id="heading">Login</h1>
            <form name="form" action="login.php" method="POST" required>
                <label>Enter Username/Email: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                if(user.length==""){
                    alert(" Enter username or email id!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
