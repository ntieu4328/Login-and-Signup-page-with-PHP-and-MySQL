<?php

// ingesting the inputs from the RegistrationForm.html into variables.
$uname = $_POST['uname'];
$psw = $_POST['psw'];
$repeatpsw = $_POST['repeatpsw'];

// If statement to see if password and the repeat password match
if ($psw !== $repeatpsw) {
    die("Passwords have to match!!!");
}

//Hashing the password. This also salts the password, so the same password won't enter the same hash.
$psw_hash = password_hash($_POST["psw"], PASSWORD_DEFAULT);

// The code on the file ConnectDatabase.php is copied into this file, so it can be used.
$mysqli = require __DIR__ . "/ConnectDatabase.php";

// Inputting the sign up information into the SQL database
// the "?" in the values section are placeholders to avoid SQL injection attacks.
$sql = "INSERT INTO register (uname, psw_hash)
        VALUES (?, ?)";

// Creating SQL prepared statement.
$stmt = $mysqli->stmt_init();

//If there's any syntax errors in the SQL statement, it will return an error.
if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

//Bind the input variables to the placeholders. The "ss" is because the 2 inputs are strings.
$stmt->bind_param("ss", $uname, $psw_hash);

//Executing the statement. If it's successful it goes up to the SignupSuccess.html page.
if ($stmt->execute()) {
    header("Location: SignupSuccess.html");
    exit;
}
