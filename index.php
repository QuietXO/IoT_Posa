<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Support Page</h1>
        <p>Feel free to contact us in case of any problems and we'll try to
					get back to you as soon as we can.</p>
        <form action="contact.php" method="POST">
            <label for="nameF">Firt Name:</label>
            <input type="text" name="nameF" id="nameF">
						<label for="nameL">Last Name:</label>
            <input type="text" name="nameL" id="nameL">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
						<label for="phone">Phone Number:</label>
            <input type="phone" name="phone" id="phone">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
