<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My PHP Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h2>About Us</h2>
        <p>This is a simple PHP website example. Feel free to explore the pages!</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
    </footer>
</body>
</html>
