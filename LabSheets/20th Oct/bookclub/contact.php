<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | City Book Club</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>City Book Club</h1>
    </header>

    <nav aria-label="Main navigation">
        <a href="index.php">Home</a>
        <a href="contact.php" aria-current="page">Contact</a>
        <a href="messages.php">Messages</a>
    </nav>

    <main>
        <h2>Contact Us</h2>
        <form action="save.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> City Book Club. All Rights Reserved.</p>
    </footer>
</body>
</html>
