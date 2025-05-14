<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"]));

    // Aap yahan email ko validate, save, ya session mein store kar sakte hain
    // Filhal hum bas welcome message dikha rahe hain
} else {
    // Agar koi direct access kare to redirect
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Next Page</title>
</head>
<body>
  <h1>Welcome to the Next Page!</h1>
  <p>Your email: <strong><?php echo $email; ?></strong></p>
</body>
</html>
