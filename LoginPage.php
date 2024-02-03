<?php

// When the login page is opened it will be REQUEST_METHOD. When the form is submitted through the login button it will be POST.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Import all the code in ConnectDatabase.php
    $mysqli = require __DIR__ . "/ConnectDatabase.php";

// Get record from the database "register" based of the "uname".
    $sql = sprintf("SELECT * FROM register
        WHERE uname = '%s'",
        $mysqli->real_escape_string($_POST["uname"]));

// Put query in a variable.
    $result = $mysqli->query($sql);

// Put the result in an array
    $user = $result->fetch_assoc();

    if ($user) {

// Verifying if password inputted matches. If it is then go to index.php page.
        if (password_verify($_POST["psw"], $user["psw_hash"])) {
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: index.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<form method="post">
<!--Login and password input-->
  <div class="container">
    <h1>Login page:</h1>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="uname" name="uname"required>
    <br>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
    <br>
    <br>
    <button type="submit">Login</button>
  </div>
</form>
</html>
